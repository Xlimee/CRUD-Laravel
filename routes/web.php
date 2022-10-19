<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
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

Route::get('/home',[HomeController::class,'index']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/create', [AdminController::class,'create']);
Route::post('/admin/store', [AdminController::class,'store']);
Route::get('/admin/edit/{id}', [AdminController::class,'edit']);
Route::put('/admin/update/{id}', [AdminController::class,'update']);
Route::get('/admin/destroy/{id}', [AdminController::class,'destroy']);


Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/create', [BarangController::class,'create']);
Route::post('/barang/store', [BarangController::class,'store']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);
Route::get('/barang/destroy/{id}', [BarangController::class,'destroy']);


Route::get('/detail', [DetailTransaksiController::class,'index']);
Route::get('/detail/create', [DetailTransaksiController::class,'create']);
Route::post('/detail/store', [DetailTransaksiController::class,'store']);
Route::get('/detail/edit/{id}', [DetailTransaksiController::class,'edit']);
Route::put('/detail/update/{id}', [DetailTransaksiController::class,'update']);
Route::get('/detail/destroy/{id}', [DetailTransaksiController::class,'destroy']);


Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/create', [TransaksiController::class,'create']);
Route::post('/transaksi/store', [TransaksiController::class,'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update']);
Route::get('/transaksi/destroy/{id}', [TransaksiController::class,'destroy']);


Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/create', [JenisController::class,'create']);
Route::post('/jenis/store', [JenisController::class,'store']);
Route::get('/jenis/edit/{id}', [JenisController::class,'edit']);
Route::put('/jenis/update/{id}', [JenisController::class,'update']);
Route::get('/jenis/destroy/{id}', [JenisController::class,'destroy']);


Route::get('/supplier', [SupplierController::class,'index']);
Route::get('/supplier/create', [SupplierController::class,'create']);
Route::post('/supplier/store', [SupplierController::class,'store']);
Route::get('/supplier/edit/{id}', [SupplierController::class,'edit']);
Route::put('/supplier/update/{id}', [SupplierController::class,'update']);
Route::get('/supplier/destroy/{id}', [SupplierController::class,'destroy']);
