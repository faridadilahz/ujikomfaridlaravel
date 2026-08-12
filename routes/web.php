<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dasbor', [AdminController::class, 'index'])->name('admin.dasbor');

    Route::get('/admin/berita', [AdminController::class, 'berita'])->name('admin.berita');
    Route::get('/admin/berita/posting-berita', [AdminController::class, 'postingberita'])->name('admin.postingberita');
    Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');

    Route::get('/admin/faq', [AdminController::class, 'faq'])->name('admin.faq');

    Route::get('/admin/profil', [AdminController::class, 'profil'])->name('admin.profil');

});

Route::prefix('admin')->name('admin.')->group(function () {
    // Route halaman berita admin
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    
    // 🟢 ROUTE UNTUK HALAMAN POSTING BERITA
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    
    // Route simpan postingan (POST)
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
});

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});

Route::get('/faq', function () {
    return view('guest.faq');
});
