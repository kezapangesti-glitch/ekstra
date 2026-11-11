<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaAuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;

// LOGIN ADMIN
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

// HALAMAN PUBLIK
Route::get('/', function () {
    return redirect()->route('publik.ekstra.index');
});

// DAFTAR EKSTRAKURIKULER
Route::get('/ekstrakurikuler', [EkstraController::class, 'publicIndex'])
    ->name('publik.ekstra.index');

Route::get('/ekstrakurikuler/{id}', [EkstraController::class, 'publicShow'])
    ->name('publik.ekstra.show');

// REGISTER SISWA
Route::get('/register-siswa', [SiswaAuthController::class, 'showRegister'])
    ->name('siswa.register');

Route::post('/register-siswa', [SiswaAuthController::class, 'register'])
    ->name('siswa.register.store');

// LOGIN SISWA
Route::get('/siswa/login', [SiswaAuthController::class, 'showLogin'])
    ->name('login.siswa');

Route::post('/siswa/login', [SiswaAuthController::class, 'login'])
    ->name('siswa.login');

Route::post('/siswa/logout', [SiswaAuthController::class, 'logout'])
    ->name('siswa.logout');

// FORM PENDAFTARAN EKSTRA
Route::middleware('siswa')->group(function () {
    Route::get('/siswa/create', [SiswaController::class, 'create'])
        ->name('siswa.create');

    Route::post('/siswa', [SiswaController::class, 'store'])
        ->name('siswa.store');
});

// ROUTE ADMIN
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard');

    // KELOLA AKUN ADMIN
    Route::resource('/admin', AdminController::class);

    // KELOLA EKSTRAKURIKULER
    Route::resource('/ekstra', EkstraController::class);

    // KELOLA PENDAFTARAN
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'show'])
        ->name('pendaftaran.show');
});

// HALAMAN PUBLIK
Route::get('/', function () {
    return redirect()->route('publik.ekstra.index');
});

// SISWA - TANPA LOGIN UNTUK MELIHAT EKSTRA
Route::get('/ekstrakurikuler', [EkstraController::class, 'publicIndex'])
    ->name('publik.ekstra.index');

Route::get('/ekstrakurikuler/{id}', [EkstraController::class, 'publicShow'])
    ->name('publik.ekstra.show');

// REGISTER SISWA
Route::get('/register-siswa', [SiswaAuthController::class, 'showRegister'])
    ->name('siswa.register');

Route::post('/register-siswa', [SiswaAuthController::class, 'register'])
    ->name('siswa.register.store');

// LOGIN SISWA
Route::get('/siswa/login', [SiswaAuthController::class, 'showLogin'])
    ->name('login.siswa');

Route::post('/siswa/login', [SiswaAuthController::class, 'login'])
    ->name('siswa.login');

Route::post('/siswa/logout', [SiswaAuthController::class, 'logout'])
    ->name('siswa.logout');

// FORM PENDAFTARAN EKSTRA
Route::get('/siswa/create', [SiswaController::class, 'create'])
    ->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])
    ->name('siswa.store');

// ROUTE ADMIN
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard');

    // KELOLA AKUN ADMIN
    Route::resource('/admin', AdminController::class);

    // KELOLA EKSTRAKURIKULER
    Route::resource('/ekstra', EkstraController::class);

    // KELOLA PENDAFTARAN
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'show'])
        ->name('pendaftaran.show');
});
