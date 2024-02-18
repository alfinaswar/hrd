<?php

use App\Http\Controllers\CatatanKerjaController;
use App\Http\Controllers\JadwalKerjaController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LembarKerjaController;
use App\Models\CatatanKerja;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/lembar-kerja', [LembarKerjaController::class, 'index'])->name('lembar-kerja.index');
Route::resource('kontrak', KontrakController::class);
Route::resource('jadwal', JadwalKerjaController::class);
Route::resource('catatan', CatatanKerjaController::class);
Route::get('/laporan.catatan', [LaporanController::class, 'catatan'])->name('laporan.catatan');
Route::get('/laporan.kontrak', [LaporanController::class, 'kontrak'])->name('laporan.kontrak');
Route::get('/laporan.jadwal', [LaporanController::class, 'jadwal'])->name('laporan.jadwal');
Route::resource('laporan', LaporanController::class);
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});
