<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminBlogPostController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        $posts = $query->latest()->get();
        // Since we need $user and $stats for the sidebar layout which is used everywhere:
        $user = auth()->user() ?? \App\Models\User::first();
        $stats = [
            'appointments' => DB::table('appointments')->whereDate('appointment_at', today())->count(),
            'messages' => DB::table('contact_messages')->where('status', 'new')->count(),
            'services' => DB::table('services')->where('is_active', true)->count(),
            'pages' => 3
        ];
        return view('admin-blog-posts', compact('posts', 'user', 'stats'));
    }

    public function create()
    {
        $user = auth()->user() ?? \App\Models\User::first();
        $stats = [
            'appointments' => DB::table('appointments')->whereDate('appointment_at', today())->count(),
            'messages' => DB::table('contact_messages')->where('status', 'new')->count(),
            'services' => DB::table('services')->where('is_active', true)->count(),
            'pages' => 3
        ];
        return view('admin-blog-post-edit', compact('user', 'stats'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:blog_posts',
            'status' => 'required|in:published,draft',
            'author' => 'nullable|string',
            'publish_date' => 'nullable|date',
            'category' => 'nullable|string',
            'tags' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'key_takeaways' => 'nullable|string',
            'content' => 'nullable|string',
            'image_alt_text' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_robots' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'schema_json' => 'nullable|string',
            'featured_image' => 'nullable|image|max:5120'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('blog_images', 'public');
            $validated['image_path'] = $path;
        }

        $validated['show_on_home'] = $request->has('show_on_home');
        $validated['feature_on_home'] = $request->has('feature_on_home');

        BlogPost::create($validated);
        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post created.');
    }

    public function edit(BlogPost $blogPost)
    {
        $user = auth()->user() ?? \App\Models\User::first();
        $stats = [
            'appointments' => DB::table('appointments')->whereDate('appointment_at', today())->count(),
            'messages' => DB::table('contact_messages')->where('status', 'new')->count(),
            'services' => DB::table('services')->where('is_active', true)->count(),
            'pages' => 3
        ];
        return view('admin-blog-post-edit', compact('blogPost', 'user', 'stats'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:blog_posts,slug,' . $blogPost->id,
            'status' => 'required|in:published,draft',
            'author' => 'nullable|string',
            'publish_date' => 'nullable|date',
            'category' => 'nullable|string',
            'tags' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'key_takeaways' => 'nullable|string',
            'content' => 'nullable|string',
            'image_alt_text' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_robots' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'schema_json' => 'nullable|string',
            'featured_image' => 'nullable|image|max:5120'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('blog_images', 'public');
            $validated['image_path'] = $path;
        }

        $validated['show_on_home'] = $request->has('show_on_home');
        $validated['feature_on_home'] = $request->has('feature_on_home');

        $blogPost->update($validated);
        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post updated.');
    }

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post deleted.');
    }
}
