<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminHeroController extends Controller
{
    public function edit(Request $request)
    {
        $this->authorizeAdmin();

        $slide = min(3, max(1, (int) $request->query('slide', 1)));
        return view('admin-home-hero', [
            'hero' => $this->hero($slide),
            'slide' => $slide,
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $this->authorizeAdmin();

        $data = $request->validate([
            'heading' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'primary_button_text' => ['required', 'string', 'max:80'],
            'primary_button_link' => ['required', 'string', 'max:255'],
            'secondary_button_text' => ['required', 'string', 'max:80'],
            'secondary_button_link' => ['required', 'string', 'max:255'],
        ]);
        unset($data['image']);

        $slide = min(3, max(1, (int) $request->input('slide', 1)));
        $key = 'home_hero_' . $slide;
        $existing = $this->hero($slide);
        $imagePath = $existing->image_path ?? null;

        if ($request->hasFile('image')) {
            $imageUsedByAnotherSlide = $imagePath && DB::table('hero_settings')
                ->where('key', '<>', $key)
                ->where('image_path', $imagePath)
                ->exists();

            if ($imagePath && ! $imageUsedByAnotherSlide && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('hero', 'public');
        }

        DB::table('hero_settings')->updateOrInsert(
            ['key' => $key],
            array_merge($data, ['image_path' => $imagePath, 'updated_at' => now(), 'created_at' => $existing->created_at ?? now()])
        );

        return redirect()->route('admin.home-hero.edit', ['slide' => $slide])->with('success', 'Home page hero has been updated.');
    }

    private function hero($slide = 1)
    {
        $key = 'home_hero_' . $slide;
        return DB::table('hero_settings')->where('key', $key)->first() ?: ($slide === 1 ? DB::table('hero_settings')->where('key', 'home_hero')->first() : null) ?: (object) [
            'heading' => 'Precision Diagnostics. Better Answers for Better Care.',
            'description' => 'Sterling Genomic, Molecular & Clinical Diagnostics is a U.S. laboratory providing accurate, science-driven testing for patients and providers.',
            'image_path' => null,
            'primary_button_text' => 'Our Services',
            'primary_button_link' => '#services',
            'secondary_button_text' => 'Contact Us',
            'secondary_button_link' => '#contact',
            'created_at' => null,
        ];
    }

    private function authorizeAdmin()
    {
        if (! Auth::check()) {
            abort(403);
        }

        abort_unless(Auth::user()->is_admin, 403);
    }
}
