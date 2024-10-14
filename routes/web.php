<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LandingController, DashboardController};
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');


Route::middleware(['role:admin'])->group(function(){
    Route::prefix('/dashboard/admin')->group(function(){
        Route::get('/', [DashboardController::class, 'admin'])->name('dashboard.admin');
    });
});