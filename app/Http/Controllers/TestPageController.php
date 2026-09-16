<?php

namespace App\Http\Controllers;

use App\Models\TestPage;
use Illuminate\Http\Request;

class TestPageController extends Controller
{
    public function show($slug)
    {
        $testPage = TestPage::with(['components', 'results', 'service.faqs'])
            ->where('slug', $slug)
            ->whereIn('status', ['published', 'active'])
            ->firstOrFail();
        
        $service = $testPage->service ?? (object)['id' => 0]; // fallback if not set
        $tests = collect();
        $specimens = [];
        $faqs = [];

        $testPages = \App\Models\TestPage::where('service_id', $service->id)->where('status', 'published')->latest()->get();
        return view('services.genomic-diagnostics', compact('service', 'tests', 'testPages', 'specimens', 'faqs'));
    }
}
