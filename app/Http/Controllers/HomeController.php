<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $hero = DB::table('hero_settings')->where('key', 'home_hero')->first();

        return view('home', compact('hero'));
    }
}
