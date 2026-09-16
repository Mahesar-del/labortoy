<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminFaqController extends Controller
{
    public function index()
    {
        $this->guard();
        return view('admin-faqs', [
            'services' => DB::table('services')->where('is_active', true)->orderBy('name')->get(),
            'tests' => DB::table('tests')->orderBy('name')->get(),
            'testPages' => DB::table('test_pages')->orderBy('title')->get(),
            'faqs' => DB::table('service_faqs')
                ->leftJoin('services', 'service_faqs.service_id', '=', 'services.id')
                ->leftJoin('test_pages', 'service_faqs.test_page_id', '=', 'test_pages.id')
                ->leftJoin('tests', 'service_faqs.test_id', '=', 'tests.id')
                ->select(
                    'service_faqs.*', 
                    DB::raw('COALESCE(services.name, test_pages.title, tests.name, "Main FAQ Page") as assigned_name'),
                    DB::raw('
                        CASE 
                            WHEN service_faqs.service_id IS NOT NULL THEN "Service"
                            WHEN service_faqs.test_page_id IS NOT NULL THEN "Test Page"
                            WHEN service_faqs.test_id IS NOT NULL THEN "Basic Test"
                            ELSE "Global"
                        END as type
                    ')
                )
                ->latest('service_faqs.id')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'assign_to' => 'required|string', 
            'question' => 'required|string|max:250', 
            'answer' => 'required|string|max:3000',
            'tab_name' => 'nullable|string|max:250',
            'section_heading' => 'nullable|string|max:250',
            'faq_heading' => 'nullable|string|max:250',
            'faq_description' => 'nullable|string|max:1500',
        ]);

        $service_id = null;
        $test_page_id = null;
        $test_id = null;
        $tab_name = null;
        $section_heading = null;

        if (str_starts_with($data['assign_to'], 'service_')) {
            $service_id = (int) str_replace('service_', '', $data['assign_to']);
            if ($request->filled('faq_heading') || $request->filled('faq_description')) {
                DB::table('services')->where('id', $service_id)->update([
                    'faq_heading' => $data['faq_heading'] ?? null,
                    'faq_description' => $data['faq_description'] ?? null,
                ]);
            }
        } elseif (str_starts_with($data['assign_to'], 'testpage_')) {
            $test_page_id = (int) str_replace('testpage_', '', $data['assign_to']);
            if ($request->filled('faq_heading') || $request->filled('faq_description')) {
                DB::table('test_pages')->where('id', $test_page_id)->update([
                    'faq_heading' => $data['faq_heading'] ?? null,
                    'faq_description' => $data['faq_description'] ?? null,
                ]);
            }
        } elseif (str_starts_with($data['assign_to'], 'test_')) {
            $test_id = (int) str_replace('test_', '', $data['assign_to']);
            if ($request->filled('faq_heading') || $request->filled('faq_description')) {
                DB::table('tests')->where('id', $test_id)->update([
                    'faq_heading' => $data['faq_heading'] ?? null,
                    'faq_description' => $data['faq_description'] ?? null,
                ]);
            }
        } elseif ($data['assign_to'] === 'main_faq') {
            $tab_name = $data['tab_name'] ?? 'General Questions';
            $section_heading = $data['section_heading'] ?? null;
        }

        DB::table('service_faqs')->insert([
            'service_id' => $service_id, 
            'test_page_id' => $test_page_id,
            'test_id' => $test_id,
            'tab_name' => $tab_name,
            'section_heading' => $section_heading,
            'question' => $data['question'], 
            'answer' => $data['answer'], 
            'is_active' => true, 
            'created_at' => now(), 
            'updated_at' => now()
        ]);
        return back()->with('success', 'FAQ added and assigned successfully.');
    }

    public function destroy($id)
    {
        $this->guard();
        DB::table('service_faqs')->where('id', $id)->delete();
        return back()->with('success', 'FAQ removed successfully.');
    }

    private function guard() { abort_unless(Auth::check() && Auth::user()->is_admin, 403); }
}
