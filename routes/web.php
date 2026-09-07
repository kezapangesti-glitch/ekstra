<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login.siswa');
});

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

// =========================
// ROUTE SISWA
// =========================

    Route::get('/register-siswa', [App\Http\Controllers\SiswaAuthController::class, 'showRegister'])
    ->name('siswa.register');

    Route::post('/register-siswa', [App\Http\Controllers\SiswaAuthController::class, 'register'])
    ->name('siswa.register.store');

    Route::get('/siswa/login', [App\Http\Controllers\SiswaAuthController::class, 'showLogin'])
    ->name('login.siswa');

    Route::post('/siswa/login', [App\Http\Controllers\SiswaAuthController::class, 'login'])
    ->name('siswa.login');

    Route::post('/siswa/logout', [App\Http\Controllers\SiswaAuthController::class, 'logout'])
    ->name('siswa.logout');

    Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])
    ->name('siswa.index');

    Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])
    ->name('siswa.create');

    Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store'])
    ->name('siswa.store');

    Route::get('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'show'])
    ->name('siswa.show');


// =========================
// LOGIN ADMIN
// =========================

    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
    ->name('login');

    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
    ->name('login.process');


// =========================
// ROUTE ADMIN
// =========================

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth',
], function() {

    // Dashboard Admin
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('dashboard');

    // Admin
    Route::resource('/admin', App\Http\Controllers\AdminController::class);

    // Pendaftaran
    Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran.index');

    // Ekstrakurikuler
    Route::resource('/ekstra', App\Http\Controllers\EkstraController::class);
});