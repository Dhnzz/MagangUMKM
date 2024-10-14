<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LandingController, DashboardController};
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::prefix('/dashboard/admin')->group(function () {
            Route::get('/', [DashboardController::class, 'admin'])->name('dashboard.admin');
        });
    });

    Route::middleware(['role:pemilik'])->group(function () {
        Route::prefix('/dashboard/pemilik')->group(function () {
            Route::get('/', [DashboardController::class, 'pemilik'])->name('dashboard.pemilik');
        });
    });
});
