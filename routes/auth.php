<?php

declare(strict_types=1);

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Auth web routes

    // Authentication Routes...
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::middleware('throttle:60,1')
        ->post('login', [LoginController::class, 'login'])
        ->name('login.auth');

    Route::get('lock', [LoginController::class, 'resetCookieLockMe'])->name('login.lock');


Route::get('switch-logout', [LoginController::class, 'switchLogout']);
Route::post('switch-logout', [LoginController::class, 'switchLogout'])->name('switch.logout');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
