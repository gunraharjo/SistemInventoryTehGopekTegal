<?php

use App\Http\Controllers\BarangKeluar;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DataBarang;
use App\Http\Controllers\DataSupplier;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Supplier;
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
Route::resource('/home', HomeController::class);
Route::resource('/barangmasuk', BarangMasukController::class);
Route::resource('/databarang', DataBarang::class);
Route::resource('/supplier', DataSupplier::class);
Route::resource('/barangkeluar', BarangKeluarController::class);
Route::resource('/stock', StockController::class);
