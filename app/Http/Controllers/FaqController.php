<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = \Illuminate\Support\Facades\DB::table('service_faqs')
            ->whereNull('service_id')
            ->whereNull('test_page_id')
            ->where('is_active', true)
            ->get();

        // Group by tab_name, then by section_heading
        $groupedFaqs = [];
        foreach ($faqs as $faq) {
            $tab = $faq->tab_name ?: 'General Questions';
            $section = $faq->section_heading ?: 'General';
            
            if (!isset($groupedFaqs[$tab])) {
                $groupedFaqs[$tab] = [];
            }
            if (!isset($groupedFaqs[$tab][$section])) {
                $groupedFaqs[$tab][$section] = [];
            }
            $groupedFaqs[$tab][$section][] = $faq;
        }

        return view('faq', compact('groupedFaqs'));
    }
}
