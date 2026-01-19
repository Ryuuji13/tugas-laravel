<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

// Route untuk PostController
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/about-me', [PostController::class, 'about'])->name('posts.about');

Route::get('/profil/{id}', [SekolahController::class, 'show']);
