<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']], function(){
Route::resource('pelanggan', 'PelangganController');
Route::resource('penjualan', 'PenjualanController');
Route::resource('buku', 'BukuController');

Route::group(['middleware'=>'role:admin'],function(){
Route::resource('detailpenjualan', 'DetailPenjualanController');
Route::resource('Karyawan', 'KaryawanController');
});

Route::get('/pdf/{id}', 'PDFController@pdf');
});

Route::get('/Route', function () {
    return view('layouts.master');
});
Route::get('/register', function(){
	return view('errors.404');
});

Route::group(['middleware'=>'cors'], function(){
	Route::get('/listdata', 'APIController@listdata');
});