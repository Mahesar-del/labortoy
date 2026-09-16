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
        
        return view('services.test-page', compact('testPage'));
    }
}
