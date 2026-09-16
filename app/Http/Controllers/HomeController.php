<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $savedHeroes = DB::table('hero_settings')
            ->whereIn('key', ['home_hero_1', 'home_hero_2', 'home_hero_3'])
            ->get()
            ->keyBy('key');
        $legacyHero = DB::table('hero_settings')->where('key', 'home_hero')->first();
        $fallbackHeroes = [
            1 => ['heading' => 'Precision Diagnostics. Better Answers for Better Care.', 'description' => 'Sterling Genomic, Molecular & Clinical Diagnostics is a U.S. laboratory providing accurate, science-driven testing for patients and providers.', 'image' => 'img/hero-doctor-img.png', 'primary_button_text' => 'Our Services', 'primary_button_link' => '#services', 'secondary_button_text' => 'Contact Us', 'secondary_button_link' => '#contact'],
            2 => ['heading' => 'Advanced Laboratory Testing. Clearer Clinical Insight.', 'description' => 'Science-driven diagnostic services designed to support patients, providers, and informed healthcare decisions.', 'image' => 'img/hero-doctor-female.png', 'primary_button_text' => 'Our Services', 'primary_button_link' => '#services', 'secondary_button_text' => 'Contact Us', 'secondary_button_link' => '#contact'],
            3 => ['heading' => 'Reliable Results. When They Matter Most.', 'description' => 'Sterling delivers laboratory support across chemistry, immunoassay, hematology, and diagnostic testing.', 'image' => 'img/hero-doctor-male.png', 'primary_button_text' => 'Our Services', 'primary_button_link' => '#services', 'secondary_button_text' => 'Contact Us', 'secondary_button_link' => '#contact'],
        ];
        $heroSlides = collect($fallbackHeroes)->map(function ($fallback, $slide) use ($savedHeroes, $legacyHero) {
            $saved = $savedHeroes->get('home_hero_' . $slide);
            if (! $saved && $slide === 1) {
                $saved = $legacyHero;
            }

            $hero = (object) array_merge($fallback, $saved ? (array) $saved : []);
            if (! empty($hero->image_path) && Storage::disk('public')->exists($hero->image_path)) {
                $hero->image_url = asset('storage/' . $hero->image_path) . '?v=' . strtotime($hero->updated_at ?? 'now');
            } else {
                $hero->image_path = null;
                $hero->image_url = asset($fallback['image']);
            }

            return $hero;
        })->values();
        $hero = $heroSlides->first();
        $heroSlidesForJs = $heroSlides->map(function ($slide) {
            return [
                'title' => nl2br(e($slide->heading)),
                'description' => e($slide->description ?? ''),
                'docImage' => $slide->image_url,
                'primaryButtonText' => $slide->primary_button_text ?? 'Our Services',
                'primaryButtonLink' => $slide->primary_button_link ?? '#services',
                'secondaryButtonText' => $slide->secondary_button_text ?? 'Contact Us',
                'secondaryButtonLink' => $slide->secondary_button_link ?? '#contact',
                'bgLeft' => asset('img/hero-bg-img-left.png'),
                'bgRight' => asset('img/hero-bg-img-right.jpg'),
            ];
        })->values();
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

        return view('home', compact('hero', 'heroSlides', 'heroSlidesForJs', 'contact', 'blogPosts'));
    }
}
