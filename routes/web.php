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

Route::get('/joborder', 'JoborderController@list')->middleware('auth');
Route::get('/joborder/tambah', 'JoborderController@tambah')->middleware('auth');
Route::get('/pekerjaan', 'PekerjaanController@list')->middleware('auth');
Route::get('/user','UserController@index')->middleware('auth');
Route::get('/user/tambah', 'UserController@tambah')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::post('/joborder/store','JobOrderController@store')->middleware('auth');
