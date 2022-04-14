<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BpenjualanController;
use App\Http\Controllers\JpenjualanController;
use App\Http\Controllers\MpenjualanController;
use App\Http\Controllers\TpenjualanController;
use App\Http\Controllers\PerbandinganpenjualanController;

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
// Menu Penjualan (Utama)
Route::resource('/master-penjualan', MpenjualanController::class)->except(['show']);
Route::resource('/barang-penjualan', BpenjualanController::class)->except(['show']);
Route::resource('/jenis-penjualan', JpenjualanController::class)->except(['show']);
Route::resource('/transaksi-penjualan', TpenjualanController::class)->except(['show']);
Route::resource('/perbandingan-penjualan', PerbandinganpenjualanController::class)->except(['show']);
Route::resource('/', DashboardController::class)->only(['index']);

Route::get('/transaksi-penjualan/reset', [TpenjualanController::class, 'reset'])->name('transaksi-penjualan.reset');
// Menu Penjualan (Utama)

// Menu Tambahan
Route::get('/about-me', function () {
    $active = "about_me";
    return view('Menutambahan.about', compact('active'));
});

Route::get('/dokumentasi-web', function () {
    $active = "dokumentasi_web";
    return view('Menutambahan.dokumentasi', compact('active'));
});
// Menu Tambahan