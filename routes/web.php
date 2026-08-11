<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('auth.login');
});