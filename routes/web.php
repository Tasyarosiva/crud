<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/halaman', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/halaman/create', [App\Http\Controllers\LandingController::class, 'create']);
Route::post('/halaman/store', [App\Http\Controllers\LandingController::class, 'store']);
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('bs');
Route::get('/barang/hapus/{id}', [App\Http\Controllers\BarangController::class, 'destroy'])->name('barang.hapus');
Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/edit/{id}/simpan', [App\Http\Controllers\BarangController::class, 'update'])->name('barang.update');
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::get('/pegawai', [App\Http\Controllers\BarangController::class, 'index'])->name('pegawai');
Route::get('/costumer', [App\Http\Controllers\BarangController::class, 'index'])->name('costumer');
Route::get('/kode', [App\Http\Controllers\BarangController::class, 'index'])->name('kode');
