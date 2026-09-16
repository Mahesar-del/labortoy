<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminHeroController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminTestController;
use App\Http\Controllers\AdminMolecularSectionController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Hosting-safe access to files uploaded on Laravel's public disk. This keeps
// uploads working on shared hosting even when public/storage cannot be linked.
Route::get('/media/{path}', function ($path) {
    abort_if(strpos($path, '..') !== false || preg_match('~(^|/)\.~', $path), 403);

    $disk = \Illuminate\Support\Facades\Storage::disk('public');
    abort_unless($disk->exists($path), 404);

    return response()->file($disk->path($path));
})->where('path', '.*')->name('media.public');

Route::get('/search', function (\Illuminate\Http\Request $request) {
    $query = trim((string) $request->query('q'));
    $services = collect();
    $tests = collect();
    $blogs = collect();
    if ($query !== '') {
        $services = \Illuminate\Support\Facades\DB::table('services')->where('is_active', true)->where(function ($builder) use ($query) { $builder->where('name', 'like', '%'.$query.'%')->orWhere('summary', 'like', '%'.$query.'%'); })->get();
        $tests = \Illuminate\Support\Facades\DB::table('tests')->join('services', 'tests.service_id', '=', 'services.id')->where('tests.is_active', true)->where('services.is_active', true)->where(function ($builder) use ($query) { $builder->where('tests.name', 'like', '%'.$query.'%')->orWhere('tests.heading', 'like', '%'.$query.'%')->orWhere('tests.description', 'like', '%'.$query.'%'); })->select('tests.*', 'services.name as service_name', 'services.slug as service_slug')->get();
        $blogs = \App\Models\BlogPost::where('status', 'published')->where(function ($builder) use ($query) {
            $builder->where('title', 'like', '%'.$query.'%')
                ->orWhere('excerpt', 'like', '%'.$query.'%')
                ->orWhere('content', 'like', '%'.$query.'%')
                ->orWhere('category', 'like', '%'.$query.'%')
                ->orWhere('tags', 'like', '%'.$query.'%');
        })->latest('publish_date')->get();
    }
    return view('search-results', compact('query', 'services', 'tests', 'blogs'));
})->name('search');

Route::get('/search/suggestions', function (\Illuminate\Http\Request $request) {
    $query = trim((string) $request->query('q'));
    if (strlen($query) < 2) return response()->json([]);
    $services = \Illuminate\Support\Facades\DB::table('services')->where('is_active', true)->where('name', 'like', '%'.$query.'%')->limit(4)->get()->map(function ($service) { return ['title' => $service->name, 'type' => 'Service', 'url' => url('/service/'.$service->slug)]; });
    $tests = \Illuminate\Support\Facades\DB::table('tests')->join('services', 'tests.service_id', '=', 'services.id')->where('tests.is_active', true)->where('services.is_active', true)->where(function ($builder) use ($query) { $builder->where('tests.name', 'like', '%'.$query.'%')->orWhere('tests.heading', 'like', '%'.$query.'%'); })->select('tests.name', 'tests.heading', 'services.name as service_name', 'services.slug as service_slug')->limit(6)->get()->map(function ($test) { return ['title' => $test->heading ?: $test->name, 'type' => 'Test · '.$test->service_name, 'url' => url('/service/'.$test->service_slug)]; });
    $blogs = \App\Models\BlogPost::where('status', 'published')->where('title', 'like', '%'.$query.'%')->latest('publish_date')->limit(4)->get()->map(function ($post) { return ['title' => $post->title, 'type' => 'Blog', 'url' => route('blog.show', $post->slug)]; });
    return response()->json($services->merge($tests)->merge($blogs)->values());
})->name('search.suggestions');

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/chemistry-testing', [ServiceController::class, 'chemistry'])->name('chemistry.testing');
Route::get('/service/chemistry-testing', [ServiceController::class, 'chemistry']);
Route::get('/service/clinical-diagnostics', [ServiceController::class, 'clinical']);
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/tests/{slug}', [App\Http\Controllers\TestPageController::class, 'show'])->name('test-pages.show');
Route::get('/cbc-test', function () { return view('services.cbc-test'); });
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/provider-page', [ProviderController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/appointment/booked-slots', [AppointmentController::class, 'bookedSlots'])->name('appointment.booked-slots');
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/cbc-test', function () { 
    $test = \Illuminate\Support\Facades\DB::table('tests')->where('name', 'like', '%CBC%')->first();
    $faqs = [];
    if ($test) {
        $faqs = \Illuminate\Support\Facades\DB::table('service_faqs')
            ->where('test_id', $test->id)
            ->where('is_active', true)
            ->get();
    }
    return view('services.cbc-test', compact('test', 'faqs')); 
});
Route::get('/blog', function (\Illuminate\Http\Request $request) {
    $query = trim((string) $request->query('q'));
    $postsQuery = \App\Models\BlogPost::with('authorDetails')->where('status', 'published');
    if ($query !== '') {
        $postsQuery->where(function ($builder) use ($query) {
            $builder->where('title', 'like', '%'.$query.'%')
                ->orWhere('excerpt', 'like', '%'.$query.'%')
                ->orWhere('content', 'like', '%'.$query.'%')
                ->orWhere('category', 'like', '%'.$query.'%')
                ->orWhere('tags', 'like', '%'.$query.'%')
                ->orWhere('author', 'like', '%'.$query.'%');
        });
    }
    $posts = $postsQuery->latest('publish_date')->get();

    return view('services.blog', compact('posts', 'query'));
})->name('blog.index');
Route::get('/blog/{slug}', function ($slug) {
    $post = \App\Models\BlogPost::with('authorDetails')
        ->where('slug', $slug)
        ->where('status', 'published')
        ->firstOrFail();

    return view('services.blog-post', compact('post'));
})->name('blog.show');
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/home-hero', [AdminHeroController::class, 'edit'])->name('admin.home-hero.edit');
Route::post('/admin/home-hero', [AdminHeroController::class, 'update'])->name('admin.home-hero.update');
Route::get('/admin/contact-settings', [AdminContactController::class, 'edit'])->name('admin.contact-settings.edit');
Route::post('/admin/contact-settings', [AdminContactController::class, 'update'])->name('admin.contact-settings.update');
Route::get('/admin/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
Route::post('/admin/services', [AdminServiceController::class, 'store'])->name('admin.services.store');
Route::post('/admin/services/hero-image', [AdminServiceController::class, 'updateHeroImage'])->name('admin.services.hero-image.update');
Route::get('/admin/services/{id}/edit', [AdminServiceController::class, 'edit'])->name('admin.services.edit');
Route::post('/admin/services/{id}/edit', [AdminServiceController::class, 'update'])->name('admin.services.update');
Route::post('/admin/services/{id}/delete', [AdminServiceController::class, 'destroy'])->name('admin.services.delete');
Route::get('/admin/tests', [AdminTestController::class, 'index'])->name('admin.tests.index');
Route::post('/admin/tests', [AdminTestController::class, 'store'])->name('admin.tests.store');
Route::get('/admin/tests/{id}/edit', [AdminTestController::class, 'edit'])->name('admin.tests.edit');
Route::post('/admin/tests/{id}/edit', [AdminTestController::class, 'update'])->name('admin.tests.update');
Route::post('/admin/tests/{id}/delete', [AdminTestController::class, 'destroy'])->name('admin.tests.delete');
Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments.index');
Route::post('/admin/appointments/{id}', [AdminAppointmentController::class, 'update'])->name('admin.appointments.update');
Route::get('/admin/faqs', [AdminFaqController::class, 'index'])->name('admin.faqs.index');
Route::post('/admin/faqs', [AdminFaqController::class, 'store'])->name('admin.faqs.store');
Route::get('/admin/molecular-specimens', [AdminMolecularSectionController::class, 'edit'])->name('admin.molecular-specimens.edit');
Route::post('/admin/molecular-specimens', [AdminMolecularSectionController::class, 'update'])->name('admin.molecular-specimens.update');

Route::resource('admin/blog-posts', \App\Http\Controllers\AdminBlogPostController::class, ['as' => 'admin']);
Route::resource('admin/authors', \App\Http\Controllers\AdminAuthorController::class, ['as' => 'admin']);
Route::get('admin/faqs', [\App\Http\Controllers\AdminFaqController::class, 'index'])->name('admin.faqs.index');
Route::post('admin/faqs', [\App\Http\Controllers\AdminFaqController::class, 'store'])->name('admin.faqs.store');
Route::delete('admin/faqs/{id}', [\App\Http\Controllers\AdminFaqController::class, 'destroy'])->name('admin.faqs.destroy');
Route::get('admin/test-pages/convert/{id}', [\App\Http\Controllers\AdminTestPageController::class, 'convertBasicTest'])->name('admin.test-pages.convert');
Route::resource('admin/test-pages', \App\Http\Controllers\AdminTestPageController::class, ['as' => 'admin']);
