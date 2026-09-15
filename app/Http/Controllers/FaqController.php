<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $categories = DB::table('faq_categories')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        foreach ($categories as $cat) {
            $cat->items = DB::table('faq_items')
                ->where('faq_category_id', $cat->id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get();
        }

        return view('faq', compact('categories'));
    }
}
