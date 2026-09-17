<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FaqCategory;
use App\Models\FaqItem;
use Illuminate\Support\Str;

class AdminMainFaqController extends Controller
{
    public function index()
    {
        $this->guard();
        $categories = FaqCategory::with('items')->orderBy('sort_order')->get();
        return view('admin-main-faqs', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active');

        FaqCategory::create($data);

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Category created successfully.');
    }

    public function updateCategory(Request $request, $id)
    {
        $this->guard();
        $category = FaqCategory::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active');

        $category->update($data);

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Category updated successfully.');
    }

    public function destroyCategory($id)
    {
        $this->guard();
        $category = FaqCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Category deleted successfully.');
    }

    public function storeItem(Request $request)
    {
        $this->guard();
        $data = $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
            'sort_order' => 'nullable|integer',
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active');

        FaqItem::create($data);

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Item created successfully.');
    }

    public function updateItem(Request $request, $id)
    {
        $this->guard();
        $item = FaqItem::findOrFail($id);
        $data = $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
            'sort_order' => 'nullable|integer',
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active');

        $item->update($data);

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Item updated successfully.');
    }

    public function destroyItem($id)
    {
        $this->guard();
        $item = FaqItem::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.main-faqs.index')->with('success', 'FAQ Item deleted successfully.');
    }

    private function guard() { abort_unless(Auth::check() && Auth::user()->is_admin, 403); }
}
