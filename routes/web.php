<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Selamat Datang di Praktik Laravel 12!');
});

Route::get('/user/{id}', function ($id) {
    return ('Profile User dengan ID: ' . $id);
});

Route::get('/kategori/{slug?}', function ($slug = 'umum') {
    return ('Menampilkan Kategori: ' . $slug);
});

Route::get('/dashboard/statistik/pengunjung', function () {
    return 'Halaman Statistik Pengunjung';
})->name('admin.statistik');

Route::redirect('/tentang-kami', '/about');

Route::get('/about', function () {
    return 'Ini adalah Halaman Tentang Kami yang baru';
});
