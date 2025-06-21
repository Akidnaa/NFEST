<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Default login page
Route::get('/', fn() => view('auth.login'));
//events cui



// Setelah login berdasarkan role
Route::get('/main', fn() => view('main'))->middleware('auth')->name('main');
Route::get('/about', fn() => view('about'))->middleware('auth')->name('about');
Route::get('/events', [EventController::class, 'listForUser'])->name('events');
// Route::get('/events', fn() => view('events'))->middleware('auth')->name('events');

// ✅ LOGIN / LOGOUT / REGISTER
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// ✅ Hanya untuk admin (group pakai 'admin' + 'auth' middleware)
Route::middleware(['auth', \App\Http\Middleware\AdminOnly::class])->group(function () {

    Route::get('/dashboard', fn() => view('dashboard.index'))->name('dashboard.index');
    Route::get('/admin', [AdminController::class, 'index']);

    // Events
    Route::prefix('dashboard/events')->name('events.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/store', [EventController::class, 'store'])->name('store');
        Route::get('/show/{id}', [EventController::class, 'show'])->name('show');
        Route::get('/edit/{event}', [EventController::class, 'edit'])->name('edit');
        Route::put('/update/{event}', [EventController::class, 'update'])->name('update');
        Route::delete('/destroy/{event}', [EventController::class, 'destroy'])->name('destroy');

    });

    // Users
    Route::prefix('dashboard/users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

});

// Route tambahan Laravel Breeze (jika dipakai)
require __DIR__.'/auth.php';
