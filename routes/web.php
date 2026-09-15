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

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/chemistry-testing', [ServiceController::class, 'chemistry'])->name('chemistry.testing');
Route::get('/service/chemistry-testing', [ServiceController::class, 'chemistry']);
Route::get('/service/clinical-diagnostics', [ServiceController::class, 'clinical']);
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/provider-page', [ProviderController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/cbc-test', function () { return view('services.cbc-test'); });
Route::get('/blog', function () { return view('services.blog'); });
Route::get('/blog-post', function () { return view('services.blog-post'); });
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
Route::get('/admin/tests', [AdminTestController::class, 'index'])->name('admin.tests.index');
Route::post('/admin/tests', [AdminTestController::class, 'store'])->name('admin.tests.store');
Route::get('/admin/tests/{id}/edit', [AdminTestController::class, 'edit'])->name('admin.tests.edit');
Route::post('/admin/tests/{id}/edit', [AdminTestController::class, 'update'])->name('admin.tests.update');
Route::post('/admin/tests/{id}/delete', [AdminTestController::class, 'destroy'])->name('admin.tests.delete');
Route::get('/admin/faqs', [AdminFaqController::class, 'index'])->name('admin.faqs.index');
Route::post('/admin/faqs', [AdminFaqController::class, 'store'])->name('admin.faqs.store');
Route::get('/admin/molecular-specimens', [AdminMolecularSectionController::class, 'edit'])->name('admin.molecular-specimens.edit');
Route::post('/admin/molecular-specimens', [AdminMolecularSectionController::class, 'update'])->name('admin.molecular-specimens.update');
