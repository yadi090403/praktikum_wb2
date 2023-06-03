<?php

use App\Http\Controllers\kontakController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
// menggil dashbord
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/kontak', function () {
    return view('admin.kontak');
});

// Bikin routing ke dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Bikin routing ke dashboard
Route::get('/Restaurantly', [DashboardController::class, 'index2']);
// Bikin routing ke dashboard
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
// bikin ruting kategori produk
Route::get('/kategori_produk', [ProdukController::class, 'index2'])->name('produk');
// bikin ritung ke kontak
Route::get('/kontak', [kontakController::class, 'index']);