<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        return redirect('/service/chemistry-testing');
    }

    public function chemistry()
    {
        $service = DB::table('services')->where('slug', 'chemistry-testing')->first();
        abort_unless($service, 404, 'Service not found in database. Please seed the database.');
        $tests = DB::table('tests')->where('service_id', $service->id)->where('is_active', true)->latest()->get();
        $testPages = \App\Models\TestPage::where('service_id', $service->id)->whereIn('status', ['published', 'active'])->latest()->get();
        $faqs = DB::table('service_faqs')->where('service_id', $service->id)->where('is_active', true)->latest()->get();
        $storedCards = DB::table('section_settings')->where('key', 'molecular_specimens')->value('value');
        $specimens = $storedCards ? json_decode($storedCards, true) : null;

        return view('services.dynamic-service', compact('service', 'tests', 'testPages', 'specimens', 'faqs'));
    }

    public function show($slug)
    {
        $service = DB::table('services')->where('slug', $slug)->where('is_active', true)->first();
        abort_unless($service, 404);
        $tests = DB::table('tests')->where('service_id', $service->id)->where('is_active', true)->latest()->get();
        $testPages = \App\Models\TestPage::where('service_id', $service->id)->whereIn('status', ['published', 'active'])->latest()->get();
        $storedCards = DB::table('section_settings')->where('key', 'molecular_specimens')->value('value');
        $specimens = $storedCards ? json_decode($storedCards, true) : null;
        $faqs = DB::table('service_faqs')->where('service_id', $service->id)->where('is_active', true)->latest()->get();
        return view('services.dynamic-service', compact('service', 'tests', 'testPages', 'faqs', 'specimens'));
    }

    public function molecular()
    {
        $stored = DB::table('section_settings')->where('key', 'molecular_specimens')->value('value');
        $specimens = $stored ? json_decode($stored, true) : null;
        return view('services.molecular-diagnostics', compact('specimens'));
    }

    public function clinical()
    {
        return view('services.clinical-diagnostics');
    }
}
