<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Activity Log Routes 
Route::get('/load-content/activities', [ActivityLogController::class, 'showLogs'])->name('activities');

// Article Routes
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::resource('articles', ArticleController::class);
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('/articles/{id}/update', [ArticleController::class, 'edit'])->name('articles.update');
Route::delete('/articles/{id}/delete', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('/articles/{id}/show', [ArticleController::class, 'show'])->name('articles.show');

// Doctor Routes
Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::post('doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::resource('doctors', DoctorController::class);
Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
Route::get('/doctors/{id}/update', [DoctorController::class, 'edit'])->name('doctors.update');
Route::delete('/doctors/{id}/delete', [DoctorController::class, 'destroy'])->name('doctors.destroy');
Route::get('/doctors/{id}/show', [DoctorController::class, 'show'])->name('doctors.show');

// Dashboard Route
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/load-content/{section}', function ($section) {
    return view($section); 
});
