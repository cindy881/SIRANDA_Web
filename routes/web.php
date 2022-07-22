<?php

use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TindakLanjutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // DASHBOARD
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/dashboard')->group(function () {
        Route::get('/tindaklanjut', [App\Http\Controllers\DashboardController::class, 'tindaklanjut'])->name('dashboard.tindaklanjut');
        Route::resource('/pelanggaran', PelanggaranController::class);
        Route::resource('/pelanggaran/{pelanggaran:id}/tindaklanjut', TindakLanjutController::class);

        // PROFILE
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('profile');
            Route::patch('/profile', 'update');
        });
    });
});

// ADMIN
Route::prefix('/admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin.home');
    // DASHBOARD
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::prefix('/dashboard')->group(function () {
        Route::get('/tindaklanjut', [App\Http\Controllers\DashboardController::class, 'tindaklanjutAdmin'])->name('admin.dashboard.tindaklanjut');
        Route::resource('/peraturan', App\Http\Controllers\PeraturanController::class);

        // PROFILE
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'editAdmin')->name('admin.profile');
            Route::patch('/profile', 'updateAdmin');
        });
    });
});
