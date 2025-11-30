<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// contoh route untuk menampilkan view
Route::get('/', function () {
    return view('home');
});

// Route method di postcontroller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


// Route method di categorycontroller
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Route home
Route::view('/home', 'home')->name('home');

// Route about
Route::view('/about', 'about')->name('about.us');

// Halaman Blog
Route::view('/blog', 'blog')->name('blog');

// Halaman Contact
Route::view('/contact', 'contact')->name('contact');