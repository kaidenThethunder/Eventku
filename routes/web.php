<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
Route::view('/login', 'login')->name('login.form');
Route::view('/register', 'register');

// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard_admin', 'dashboard_admin')->name('dashboard_admin');
    Route::view('/', 'dashboard_user')->name('dashboard_user');
});

// Authentication Routes
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [RegisterController::class, 'register']);
