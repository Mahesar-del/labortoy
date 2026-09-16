<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            $user = (object)['name' => 'Administrator'];
        }

        $query = Author::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        $authors = $query->orderBy('name', 'asc')->get();

        return view('admin-authors', compact('authors', 'user'));
    }

    public function create()
    {
        return view('admin-author-edit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:authors',
            'status' => 'required|string',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('authors', 'public');
        }

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['name']);
        }

        Author::create($data);

        return redirect()->route('admin.authors.index')->with('success', 'Author created successfully!');
    }

    public function edit(Author $author)
    {
        return view('admin-author-edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:authors,slug,' . $author->id,
            'status' => 'required|string',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('authors', 'public');
        }

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['name']);
        }

        $author->update($data);

        return redirect()->route('admin.authors.index')->with('success', 'Author updated successfully!');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index')->with('success', 'Author deleted successfully!');
    }
}
