<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaAuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminEkstraController;

// LOGIN ADMIN UTAMA
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

// FORM PENDAFTARAN SISWA
Route::middleware(['auth', 'siswa'])->group(function () {
    Route::get('/siswa/create', [SiswaController::class, 'create'])
        ->name('siswa.create');

    Route::post('/siswa', [SiswaController::class, 'store'])
        ->name('siswa.store');
});

// ADMIN UTAMA
Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard');

    // KELOLA DATA ADMIN
    Route::resource('/admin', AdminController::class);

    // KELOLA EKSTRAKURIKULER
    Route::resource('/ekstra', EkstraController::class);

    // KELOLA AKUN ADMIN EKSTRAKURIKULER
    Route::get('/akun-admin-ekstra', [AdminEkstraController::class, 'index'])
        ->name('akun_admin_ekstra.index');

    Route::get('/akun-admin-ekstra/create', [AdminEkstraController::class, 'create'])
        ->name('akun_admin_ekstra.create');

    Route::post('/akun-admin-ekstra', [AdminEkstraController::class, 'store'])
        ->name('akun_admin_ekstra.store');

    Route::delete('/akun-admin-ekstra/{id}', [AdminEkstraController::class, 'destroy'])
        ->name('akun_admin_ekstra.destroy');

    // KELOLA SEMUA PENDAFTARAN
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'show'])
        ->name('pendaftaran.show');
});

// ADMIN EKSTRAKURIKULER
Route::prefix('admin-ekstra')->name('admin_ekstra.')
    ->middleware(['auth', 'admin_ekstra'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboardEkstra'])
        ->name('dashboard');

    // MELIHAT PENDAFTARAN EKSTRAKURIKULER SENDIRI
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'show'])
        ->name('pendaftaran.show');
});
