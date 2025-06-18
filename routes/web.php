<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

// Route login kustom Anda
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route register kustom Anda (pastikan Anda juga membuat auth/register.blade.php)
Route::get('/register', function () {
    return view('auth.register'); // Anda perlu membuat file ini
})->name('register');


// Route otentikasi dari Laravel Breeze (untuk logout, dashboard, profile, dll)
// Pastikan ini ada DI BAWAH route kustom login/register Anda
// agar route kustom Anda memiliki prioritas.
require __DIR__.'/auth.php';