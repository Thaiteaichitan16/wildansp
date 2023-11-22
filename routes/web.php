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


Route::get('transaksi', function () {
    return view('Admin.transaksi');
});
Route::get('tabel', function () {
    return view('Admin.table');
});
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dash']);
    Route::get('login',[AdminController::class,'loginA']);
    Route::post('login',[AdminController::class,'ceklogin']);

    // petugas
    Route::get('petugas',[AdminController::class,'datatabel']);
    Route::get('nambah',[AdminController::class,'tambah']);
    Route::post('nambah',[AdminController::class,'tambahin']);
    Route::get('hapus/{id}',[AdminController::class,'hapus']);
    Route::get('/edit/{id}',[AdminController::class,'edit']);
    Route::post('/edit/{id}',[AdminController::class,'update']);

    // kelas
    Route::get('kelas',[AdminController::class,'datatabel2']);
    Route::get('knambah',[AdminController::class,'tambahkel']);
    Route::post('knambah',[AdminController::class,'tambahkelas']);
    Route::get('khapus/{id}',[AdminController::class,'hapuskelas']);
    Route::get('/kedit/{id}',[AdminController::class,'editkelas']);
    Route::post('/kedit/{id}',[AdminController::class,'updatekelas']);

    //siswa
    Route::get('siswa',[AdminController::class,'datatabel3']);
    Route::get('snambah',[AdminController::class,'tambahsis']);
    Route::post('snambah',[AdminController::class,'tambahsiswa']);
    Route::get('shapus/{id}',[AdminController::class,'hapussiswa']);
    Route::get('/sedit/{nisn}',[AdminController::class,'editsiswa']);
    Route::post('/sedit/{nisn}',[AdminController::class,'updatesiswa']);

    //spp
    Route::get('spp',[AdminController::class,'datatabel4']);
    Route::get('spnambah',[AdminController::class,'tambahspp']);
    Route::post('spnambah',[AdminController::class,'tambahespp']);
    Route::get('sphapus/{id}',[AdminController::class,'hapusspp']);
    Route::get('/spedit/{id}',[AdminController::class,'editspp']);
    Route::post('/spedit/{id}',[AdminController::class,'updatespp']);

    Route::get('status/{id}',[AdminController::class,'status']);
    Route::get('logout',[AdminController::class,'logout']);
   
    
});
