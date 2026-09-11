<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ContactController;

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

Route::get('/services', function () {
    return redirect('/service/genomic-diagnostics');
});

Route::get('/genomic-diagnostics', function () {
    return view('services.genomic-diagnostics');
});

Route::get('/service/genomic-diagnostics', function () {
    return view('services.genomic-diagnostics');
});

Route::get('/service/molecular-diagnostics', function () {
    return view('services.molecular-diagnostics');
});

Route::get('/service/clinical-diagnostics', function () {
    return view('services.clinical-diagnostics');
});

Route::get('/provider-page', [ProviderController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
