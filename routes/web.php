<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\RegistrationController;
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
Route::view('/kelolaevent', '/admin/kelola_event');
Route::view('/tambahevent', '/admin/tambah_event');
Route::view('/daftarevent', '/user/daftar_event');
Route::view('/partisipan', '/admin/partisipan');

// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard_admin', '/admin/dashboard_admin')->name('dashboard_admin');
    Route::view('/', '/user/dashboard_user')->name('dashboard_user');
});

// Authentication Routes
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [RegisterController::class, 'register']);

// Event Routes
Route::resource('events', EventController::class);

// Registration Routes
Route::resource('registrations', RegistrationController::class);

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {});
// Route untuk menampilkan form tambah event dan menyimpan event
Route::post('events', [EventController::class, 'store'])->name('admin.event.store');

Route::get('index', [EventController::class, 'index'])->name('admin.event.index');

Route::resource('admin/events', EventController::class);

Route::post('admin/registration/index', [RegistrationController::class, 'index'])->name('admin.registration.index');
Route::post('admin/registration/store', [RegistrationController::class, 'store'])->name('admin.registration.store');
Route::post('admin/registration/create', [RegistrationController::class, 'create'])->name('admin.registration.create');

Route::resource('registration', RegistrationController::class);

Route::get('admin/partisipan', [RegistrationController::class, 'indexpartisipan'])->name('admin.partisipan.index');
Route::delete('/partisipan/{id}', [RegistrationController::class, 'destroypartisipan'])->name('admin.partisipan.destroy');
Route::post('/partisipan/update', [RegistrationController::class, 'updatepartisipan'])->name('admin.partisipan.update');

Route::resource('registration', RegistrationController::class);
// Route::get('/events', [RegistrationController::class, 'getEvents']);
// Route::get('/events/{id}', [RegistrationController::class, 'getEventDetails']);
Route::get('/events', [RegistrationController::class, 'getAllEvents']);
