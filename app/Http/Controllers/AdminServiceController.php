<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function index()
    {
        $this->guard();
        $savedCards = DB::table('section_settings')->where('key', 'molecular_specimens')->value('value');
        $molecular = $savedCards ? json_decode($savedCards, true) : [
            'heading' => 'Specimens Used for Molecular Testing',
            'description' => 'Molecular testing can require different specimen types depending on the specific test and clinical indication.',
            'card_heading' => ['Blood', 'Swab', 'Tissue', 'Other Specimens'],
            'card_description' => ['', '', '', ''],
        ];

        return view('admin-services', [
            'services' => DB::table('services')->latest()->get(),
            'molecular' => $molecular,
        ]);
    }

    public function store(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'name' => 'required|string|max:150', 
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'hero_heading' => 'nullable|string|max:150', 
            'summary' => 'nullable|string|max:1000', 
            'hero_description' => 'nullable|string|max:1500', 
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120', 
            'button_text' => 'nullable|string|max:80', 
            'button_link' => 'nullable|string|max:255',
            'faq_heading' => 'nullable|string|max:180',
            'faq_description' => 'nullable|string|max:1500',
        ]);
        $base = Str::slug($data['name']);
        $slug = $base;
        $number = 2;
        while (DB::table('services')->where('slug', $slug)->exists()) $slug = $base . '-' . $number++;
        $heroImage = $request->hasFile('hero_image') ? $request->file('hero_image')->store('service-heroes', 'public') : null;
        DB::table('services')->insert(['name' => $data['name'], 'slug' => $slug, 'meta_title' => $data['meta_title'] ?? null, 'meta_description' => $data['meta_description'] ?? null, 'meta_keywords' => $data['meta_keywords'] ?? null, 'hero_heading' => $data['hero_heading'] ?? $data['name'], 'summary' => $data['summary'] ?? null, 'hero_description' => $data['hero_description'] ?? $data['summary'] ?? null, 'hero_image' => $heroImage, 'button_text' => $data['button_text'] ?? 'Book an Appointment', 'button_link' => $data['button_link'] ?? '/appointment', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()]);
        return back()->with('success', 'Service added successfully.');
    }

    public function updateHeroImage(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'hero_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $path = $request->file('hero_image')->store('service-heroes', 'public');
        DB::table('services')->where('id', $data['service_id'])->update(['hero_image' => $path, 'updated_at' => now()]);
        return back()->with('success', 'Service hero image updated.');
    }

    public function edit($id)
    {
        $this->guard();
        $service = DB::table('services')->where('id', $id)->first();
        abort_unless($service, 404);
        
        $testPages = \App\Models\TestPage::where('service_id', $id)->latest()->get();
        return view('admin-service-edit', compact('service', 'testPages'));
    }

    public function update(Request $request, $id)
    {
        $this->guard();
        $service = DB::table('services')->where('id', $id)->first();
        abort_unless($service, 404);

        $data = $request->validate([
            'name' => 'required|string|max:150',
            'slug' => 'nullable|string|max:150',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'summary' => 'nullable|string|max:1000',
            'hero_heading' => 'nullable|string|max:150',
            'hero_description' => 'nullable|string|max:1500',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'help_heading' => 'nullable|string|max:180',
            'help_description' => 'nullable|string|max:1500',
            'help_card_heading' => 'nullable|array|size:4',
            'help_card_heading.*' => 'nullable|string|max:100',
            'help_card_description' => 'nullable|array|size:4',
            'help_card_description.*' => 'nullable|string|max:500',
            'intro_heading' => 'nullable|string|max:180',
            'intro_description' => 'nullable|string|max:3000',
            'intro_bullets' => 'nullable|string|max:1500',
            'intro_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'button_text' => 'nullable|string|max:80',
            'button_link' => 'nullable|string|max:255',
            'faq_heading' => 'nullable|string|max:180',
            'faq_description' => 'nullable|string|max:1500',
        ]);

        $slug = Str::slug($data['slug'] ?: $data['name']);
        abort_if(DB::table('services')->where('slug', $slug)->where('id', '!=', $service->id)->exists(), 422, 'This URL is already used by another service.');
        $values = [
            'name' => $data['name'], 'slug' => $slug, 'summary' => $data['summary'] ?? null,
            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'meta_keywords' => $data['meta_keywords'] ?? null,
            'hero_heading' => $data['hero_heading'] ?? $data['name'],
            'hero_description' => $data['hero_description'] ?? $data['summary'] ?? null,
            'button_text' => $data['button_text'] ?? 'Book an Appointment', 'button_link' => $data['button_link'] ?? '/appointment',
            'faq_heading' => $data['faq_heading'] ?? null,
            'faq_description' => $data['faq_description'] ?? null,
            'updated_at' => now(),
        ];
        if ($request->has('help_card_heading')) {
            $cards = [];
            for ($i = 0; $i < 4; $i++) $cards[] = ['heading' => $data['help_card_heading'][$i] ?? '', 'description' => $data['help_card_description'][$i] ?? ''];
            $values['help_heading'] = $data['help_heading'] ?? null;
            $values['help_description'] = $data['help_description'] ?? null;
            $values['help_cards'] = json_encode($cards);
        }
        $values['intro_heading'] = $data['intro_heading'] ?? null;
        $values['intro_description'] = $data['intro_description'] ?? null;
        $values['intro_bullets'] = $data['intro_bullets'] ?? null;
        if ($request->hasFile('intro_image')) $values['intro_image'] = $request->file('intro_image')->store('service-intros', 'public');
        if ($request->hasFile('hero_image')) $values['hero_image'] = $request->file('hero_image')->store('service-heroes', 'public');
        DB::table('services')->where('id', $service->id)->update($values);
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $this->guard();
        $service = DB::table('services')->where('id', $id)->first();
        abort_unless($service, 404);

        // Optional: delete associated tests and test pages or handle constraints as needed
        DB::table('services')->where('id', $id)->delete();
        
        return back()->with('success', 'Service deleted successfully.');
    }

    private function guard() { abort_unless(Auth::check() && Auth::user()->is_admin, 403); }
}
