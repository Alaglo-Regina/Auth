<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'login'])->name('login');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::get('/registration', [MainController::class, 'registration'])->name('registration');

Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
