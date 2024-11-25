<?php

use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// /(slash): default route
// methode get, post, put, deleted
// get : melihat
// post : mengirim data dari form (insert, update)
// put : mengirim data dari form (update)
// deleted : mengirim data dari form (deleted)

Route::get('/', function () {
    return "duar";
});


Route::get('latihan', [LatihanController::class, 'index']);
Route::get('edit/{id}', [LatihanController::class, 'edit']);
Route::get('hapus/{id}', [LatihanController::class, 'delete']);

Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');

Route::post('strore-tambah', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::post('strore-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::post('strore-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');
Route::post('strore-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

Route::resource('user', UsersController::class);
