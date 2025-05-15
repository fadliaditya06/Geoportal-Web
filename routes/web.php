<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;

// Redirect ke login jika akses root
Route::get('/', function () {
    return redirect('/login');
});

// Halaman Login tanpa middleware auth/guest
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman Register tanpa middleware auth/guest
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout - hapus juga sementara middleware auth kalau belum ada session autentikasi
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Beranda tanpa middleware auth dulu supaya bisa akses
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
