<?php

namespace App\Http\Controllers;

use App\Models\TestPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTestPageController extends Controller
{
    public function index(Request $request)
    {
        $services = \App\Models\Service::with(['testPages' => function($q) use ($request) {
            if ($request->filled('search')) {
                $search = $request->search;
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%");
            }
        }])->get();

        foreach ($services as $service) {
            // Get test page titles for this service to exclude duplicates
            $testPageTitles = $service->testPages->pluck('title')->map(fn($t) => strtolower($t))->toArray();
            
            $query = \Illuminate\Support\Facades\DB::table('tests')->where('service_id', $service->id);
            if ($request->filled('search')) {
                $query->where('name', 'like', "%{$request->search}%");
            }
            $allBasic = $query->latest()->get();
            
            // Filter out basic tests that already exist as test pages
            $service->basicTests = $allBasic->filter(fn($t) => !in_array(strtolower($t->name), $testPageTitles));
        }
        
        $user = auth()->user() ?? (object)['name' => 'Admin'];
        
        return view('admin-test-pages', compact('services', 'user'));
    }

    public function create()
    {
        $user = auth()->user() ?? (object)['name' => 'Admin'];
        $services = \Illuminate\Support\Facades\DB::table('services')->get();
        return view('admin-test-page-edit', [
            'testPage' => new TestPage(), 
            'services' => $services,
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateRequest($request);
        $data['slug'] = Str::slug($data['title']);

        if (isset($data['specimen_items']) && is_array($data['specimen_items'])) {
            $data['specimen_items'] = implode("\n", array_filter($data['specimen_items']));
        }
        if (isset($data['preparation_items']) && is_array($data['preparation_items'])) {
            $data['preparation_items'] = implode("\n", array_filter($data['preparation_items']));
        }

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('test_pages', 'public');
        }
        if ($request->hasFile('about_image')) {
            $data['about_image'] = $request->file('about_image')->store('test_pages', 'public');
        }

        $testPage = TestPage::create($data);
        $this->syncComponents($request, $testPage);
        $this->syncResults($request, $testPage);

        return redirect()->route('admin.test-pages.index')->with('success', 'Test Page created successfully.');
    }

    public function edit(TestPage $testPage)
    {
        $testPage->load(['components', 'results']);
        $user = auth()->user() ?? (object)['name' => 'Admin'];
        $services = \Illuminate\Support\Facades\DB::table('services')->get();
        return view('admin-test-page-edit', compact('testPage', 'user', 'services'));
    }

    public function convertBasicTest($id)
    {
        $basic = \Illuminate\Support\Facades\DB::table('tests')->where('id', $id)->first();
        abort_unless($basic, 404);

        // Check if a test page already exists for this basic test
        $existing = TestPage::where('title', $basic->name)->where('service_id', $basic->service_id)->first();
        if ($existing) {
            return redirect()->route('admin.test-pages.edit', $existing->id);
        }

        // Create a new TestPage from the basic test data
        $testPage = TestPage::create([
            'service_id' => $basic->service_id,
            'title' => $basic->name,
            'slug' => Str::slug($basic->name),
            'description' => $basic->description,
            'status' => $basic->is_active ? 'published' : 'draft',
        ]);

        return redirect()->route('admin.test-pages.edit', $testPage->id);
    }

    public function update(Request $request, TestPage $testPage)
    {
        $data = $this->validateRequest($request, $testPage->id);
        $data['slug'] = Str::slug($data['title']);

        if (isset($data['specimen_items']) && is_array($data['specimen_items'])) {
            $data['specimen_items'] = implode("\n", array_filter($data['specimen_items']));
        }
        if (isset($data['preparation_items']) && is_array($data['preparation_items'])) {
            $data['preparation_items'] = implode("\n", array_filter($data['preparation_items']));
        }

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('test_pages', 'public');
        }
        if ($request->hasFile('about_image')) {
            $data['about_image'] = $request->file('about_image')->store('test_pages', 'public');
        }

        $testPage->update($data);
        $this->syncComponents($request, $testPage);
        $this->syncResults($request, $testPage);

        return redirect()->route('admin.test-pages.index')->with('success', 'Test Page updated successfully.');
    }

    private function syncResults(Request $request, TestPage $testPage)
    {
        $resultIds = [];
        if ($request->has('results')) {
            foreach ($request->input('results') as $resData) {
                if (empty($resData['title'])) continue;

                $result = $testPage->results()->updateOrCreate(
                    ['id' => $resData['id'] ?? null],
                    [
                        'title' => $resData['title'],
                        'description' => $resData['description'] ?? null,
                    ]
                );

                $resultIds[] = $result->id;
            }
        }
        $testPage->results()->whereNotIn('id', $resultIds)->delete();
    }

    private function syncComponents(Request $request, TestPage $testPage)
    {
        $componentIds = [];
        if ($request->has('components')) {
            foreach ($request->input('components') as $index => $compData) {
                if (empty($compData['title'])) continue; // Skip empty titles

                $component = $testPage->components()->updateOrCreate(
                    ['id' => $compData['id'] ?? null],
                    [
                        'title' => $compData['title'],
                        'description' => $compData['description'] ?? null,
                    ]
                );

                // Handle icon upload for this specific component
                if ($request->hasFile("components.{$index}.icon")) {
                    $iconPath = $request->file("components.{$index}.icon")->store('test_pages/icons', 'public');
                    $component->update(['icon' => $iconPath]);
                }

                $componentIds[] = $component->id;
            }
        }
        // Delete components that are no longer present
        $testPage->components()->whereNotIn('id', $componentIds)->delete();
    }

    public function destroy(TestPage $testPage)
    {
        $testPage->delete();
        return redirect()->route('admin.test-pages.index')->with('success', 'Test Page deleted successfully.');
    }

    private function validateRequest(Request $request, $ignoreId = null)
    {
        $uniqueRule = 'unique:test_pages,title';
        if ($ignoreId) {
            $uniqueRule .= ',' . $ignoreId;
        }

        return $request->validate([
            'title' => ['required', 'string', 'max:255', $uniqueRule],
            'service_id' => 'nullable|exists:services,id',
            'description' => 'nullable|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'quick_info_type' => 'nullable|string|max:255',
            'quick_info_specimen' => 'nullable|string|max:255',
            'quick_info_prep' => 'nullable|string|max:255',
            'about_heading' => 'nullable|string|max:255',
            'about_text' => 'nullable|string',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'specimen_title' => 'nullable|string|max:255',
            'specimen_description' => 'nullable|string',
            'specimen_items' => 'nullable|array',
            'preparation_title' => 'nullable|string|max:255',
            'preparation_description' => 'nullable|string',
            'preparation_items' => 'nullable|array',
            'components_heading' => 'nullable|string|max:255',
            'components_text' => 'nullable|string',
            'results_heading' => 'nullable|string|max:255',
            'results_text' => 'nullable|string',
            'faq_heading' => 'nullable|string|max:255',
            'faq_description' => 'nullable|string',
            'status' => 'required|in:active,draft,published',
        ]);
    }
}
