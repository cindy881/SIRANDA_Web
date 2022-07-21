<?php

use App\Http\Controllers\PelanggaranController;
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
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard/pelanggaran/edit/{pelanggaran}', [PelanggaranController::class, 'edit']);
    Route::resource('/dashboard/pelanggaran', PelanggaranController::class);
    Route::resource('/dashboard/pelanggaran/{pelanggaran:id}/tindaklanjut', TindakLanjutController::class);
});

// ADMIN
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin.home');
    Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::resource('/admin/dashboard/peraturan', App\Http\Controllers\PeraturanController::class);
});
// PROFILE
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });
