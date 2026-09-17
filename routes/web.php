<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

// Landing Page Publik & Reservasi Pelanggan (boleh diakses tanpa login)
Route::get('/landing', [LandingController::class, 'index'])->name('landing');
Route::post('/landing/reservasi', [ReservasiController::class, 'store'])->name('landing.reservasi');

// Login (tanpa login)
Route::get('/login', function () { return view('login'); })->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/index', function () {return view('index');});
Route::get('/Meja&Reservasi', function () { return view('Meja&Reservasi'); })->name('Meja&Reservasi');
Route::get('/pos', function () { return view('pos'); })->name('pos');

// ==== SEMUA HALAMAN ADMIN WAJIB LOGIN ====
Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/index', [DashboardController::class, 'index'])->name('index');

    // Peran Pengguna
    Route::get('/peran_pengguna', [RoleController::class, 'index'])->name('peran_pengguna');
    Route::post('/peran_pengguna', [RoleController::class, 'store'])->name('peran_pengguna.store');
    Route::put('/peran_pengguna/{id}', [RoleController::class, 'update'])->name('peran_pengguna.update');
    Route::delete('/peran_pengguna/{id}', [RoleController::class, 'destroy'])->name('peran_pengguna.destroy');

    // Menu Makanan & Minuman
    Route::get('/Menu', [menuController::class, 'index'])->name('Menu');
    Route::post('/Menu', [menuController::class, 'store'])->name('menu.store');
    Route::put('/Menu/{id}', [menuController::class, 'update'])->name('menu.update');
    Route::delete('/Menu/{id}', [menuController::class, 'destroy'])->name('menu.destroy');

    // Meja & Reservasi
    Route::get('/meja-reservasi', [ReservasiController::class, 'index'])->name('meja_reservasi');
    Route::post('/meja', [ReservasiController::class, 'storeMeja'])->name('meja.store');
    Route::put('/meja/{id}', [ReservasiController::class, 'updateMeja'])->name('meja.update');
    Route::delete('/meja/{id}', [ReservasiController::class, 'destroyMeja'])->name('meja.destroy');
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
    Route::put('/reservasi/{id}', [ReservasiController::class, 'update'])->name('reservasi.update');
    Route::delete('/reservasi/{id}', [ReservasiController::class, 'destroy'])->name('reservasi.destroy');

    // Stok Bahan Baku
    Route::get('/Stok', [StokController::class, 'index'])->name('Stok');
    Route::post('/Stok', [StokController::class, 'store'])->name('stok.store');
    Route::put('/Stok/{id}', [StokController::class, 'update'])->name('stok.update');
    Route::delete('/Stok/{id}', [StokController::class, 'destroy'])->name('stok.destroy');

    // Laporan, Pesanan & Pengaturan
    Route::get('/Laporan', function () { return view('Laporan'); })->name('Laporan');
    Route::get('/Pesanan', function () { return view('Pesanan'); })->name('Pesanan');
    Route::get('/settings', function () { return view('settings'); })->name('settings');

    //kasir
    Route::get('/kasir', function () { return view('kasir'); })->name('index');
    Route::get('/kasir', function () { return view('kasir'); })->name('landing.kasir');
    Route::post('/kasir/demo', function () { return view('kasir'); })->name('landing.kasir.demo');
});