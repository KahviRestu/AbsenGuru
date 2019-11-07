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

Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');

Route::get('/index','GuruController@index');
Route::post('/guru/create','GuruController@create');
Route::post('/guru/update', 'GuruController@update');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');

Route::get('/absensi','AbsensiController@index');
