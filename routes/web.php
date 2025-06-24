<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\KalenderController as AdminKalenderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KontakAdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\KalenderController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Manajemen BEM
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| 1. ROUTE PUBLIK (User umum, tidak perlu login)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/tentang', 'pages.tentang')->name('tentang');
Route::get('/program', [ProgramController::class, 'public'])->name('program');
Route::get('/kalender', [KalenderController::class, 'public'])->name('kalender');

// Kontak (Form + Kirim)
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.kirim');

/*
|--------------------------------------------------------------------------
| 2. ROUTE ADMIN (Hanya bisa diakses oleh admin setelah login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // CRUD Program, Kalender
    Route::resource('/program', AdminProgramController::class);
    Route::resource('/kalender', AdminKalenderController::class);

    // Kelola Pesan Kontak
    Route::get('/inbox', [KontakAdminController::class, 'index'])->name('admin.inbox');
    Route::get('/inbox/{id}', [KontakAdminController::class, 'show'])->name('admin.inbox.show');
    Route::delete('/inbox/{id}', [KontakAdminController::class, 'destroy'])->name('admin.inbox.destroy');

    // Tambah Admin
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
});

/*
|--------------------------------------------------------------------------
| 3. ROUTE PROFILE (Untuk user yang login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| 4. AUTH ROUTES (login, logout, register, dll)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
