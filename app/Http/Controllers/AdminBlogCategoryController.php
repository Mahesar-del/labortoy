<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminBlogCategoryController extends Controller
{
    public function index()
    {
        $this->guard();

        $categories = BlogCategory::orderBy('name')->get()->map(function ($category) {
            $category->posts_count = BlogPost::where('category', $category->name)->count();
            return $category;
        });

        return view('admin-blog-categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'name' => 'required|string|max:120|unique:blog_categories,name',
            'is_active' => 'nullable|boolean',
        ]);

        BlogCategory::create([
            'name' => $data['name'],
            'slug' => $this->uniqueSlug($data['name']),
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('success', 'Blog category created successfully.');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $this->guard();
        if (BlogPost::where('category', $blogCategory->name)->exists()) {
            return back()->withErrors(['category' => 'This category is used by blog posts and cannot be deleted.']);
        }

        $blogCategory->delete();
        return back()->with('success', 'Blog category deleted.');
    }

    private function uniqueSlug($name)
    {
        $base = Str::slug($name) ?: 'category';
        $slug = $base;
        $number = 2;
        while (BlogCategory::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $number++;
        }
        return $slug;
    }

    private function guard()
    {
        abort_unless(Auth::check() && Auth::user()->is_admin, 403);
    }
}
