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

Route::get('add','DokterController@create');
Route::post('add','DokterController@store');
Route::get('dokter','DokterController@index');
Route::get('edit/{id}','DokterController@edit');
Route::post('edit/{id}','DokterController@update');
Route::get('delete/{id}','DokterController@destroy');
