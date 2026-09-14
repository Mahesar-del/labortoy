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
Route::get('/genomic-diagnostics', [ServiceController::class, 'genomic']);
Route::get('/service/genomic-diagnostics', [ServiceController::class, 'genomic']);
Route::get('/service/molecular-diagnostics', [ServiceController::class, 'molecular']);
Route::get('/service/clinical-diagnostics', [ServiceController::class, 'clinical']);

Route::get('/provider-page', [ProviderController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/home-hero', [AdminHeroController::class, 'edit'])->name('admin.home-hero.edit');
Route::post('/admin/home-hero', [AdminHeroController::class, 'update'])->name('admin.home-hero.update');
