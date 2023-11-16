<?php

use App\Http\Controllers\AdminController;
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

Route::get('spp', function () {
    return view('Admin.spp');
});
Route::get('transaksi', function () {
    return view('Admin.transaksi');
});
Route::get('petugas', function () {
    return view('Admin.Petugas');
});
Route::get('tabel', function () {
    return view('Admin.table');
});
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dash']);
    Route::get('login',[AdminController::class,'loginA']);
    Route::post('login',[AdminController::class,'ceklogin']);
    Route::get('petugas',[AdminController::class,'datatabel']);
    Route::get('tambahpetugas',[AdminController::class,'tambah']);
    Route::get('validasi',[AdminController::class,'validsi']);
    Route::get('status/{id}',[AdminController::class,'status']);
    Route::get('logout',[AdminController::class,'logout']);
    Route::get('tanggapan',[AdminController::class,'tanggapi']);
    
});
