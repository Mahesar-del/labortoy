<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $hero = DB::table('hero_settings')->where('key', 'home_hero')->first();
        $settings = DB::table('site_settings')->whereIn('key', ['contact_address', 'contact_email', 'contact_phone'])->pluck('value', 'key');
        $contact = (object) [
            'address' => $settings['contact_address'] ?? '',
            'email' => $settings['contact_email'] ?? '',
            'phone' => $settings['contact_phone'] ?? '',
        ];
        $blogPosts = \App\Models\BlogPost::where('status', 'published')
            ->where('show_on_home', true)
            ->orderByDesc('publish_date')
            ->take(3)
            ->get();

        return view('home', compact('hero', 'contact', 'blogPosts'));
    }
}
