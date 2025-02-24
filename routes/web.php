<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\SecurityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Security routes
Route::middleware(['auth', \App\Http\Middleware\SecurityMiddleware::class])->group(function () {
    Route::get('/security/dashboard', [SecurityController::class, 'index'])->name('security.dashboard');
});

// Resident routes
Route::middleware(['auth', \App\Http\Middleware\ResidentMiddleware::class])->group(function () {
    Route::get('/resident/dashboard', [ResidentController::class, 'index'])->name('resident.dashboard');
});