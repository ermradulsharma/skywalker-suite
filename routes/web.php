<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Homepage
Route::get('/', function () {
    return view('web.welcome');
})->name('home');

// Laravel Auth routes
Auth::routes();

// Static pages
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'service'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

// Dashboard (for authenticated users)
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Resource routes
Route::resource('admin/services', ServiceController::class);
Route::resource('admin/projects', ProjectController::class);
