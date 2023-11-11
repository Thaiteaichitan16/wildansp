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

Route::get('index', function () {
    return view('Admin.index');
});
Route::get('das', function () {
    return view('Admin.Dashboard');
});
Route::get('chart', function () {
    return view('Admin.chart');
});
Route::get('empty', function () {
    return view('Admin.empty');
});
Route::get('form', function () {
    return view('Admin.form');
});
Route::get('ui', function () {
    return view('Admin.ui-elements');
});
Route::get('table', function () {
    return view('Admin.table');
});
Route::get('tabpanel', function () {
    return view('Admin.tab-panel');
});
