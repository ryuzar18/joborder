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

// JOB ORDER
Route::get('/joborder', 'JoborderController@list')->middleware('auth');
Route::get('/joborder/tambah', 'JoborderController@tambah')->middleware('auth');
Route::get('/joborder/{id}', function ($id) {
    $users = DB::table('joborder')->where('id_jobOrder', $id)->get();
 
    	// mengirim data pegawai ke view index
    	return view('joborderedit',['users' => $users]);
});
Route::post('/joborder/store','JobOrderController@store')->middleware('auth');
Route::post('/joborder/update','JobOrderController@update')->middleware('auth');
Route::get('/joborder/delete/{id}','JobOrderController@delete')->middleware('auth');


// PEKERJAAN
Route::get('/pekerjaan', 'PekerjaanController@list')->middleware('auth');
Route::get('/pekerjaan/tambah', 'PekerjaanController@tambah')->middleware('auth');
Route::get('/pekerjaan/{id}', function ($id) {
    $users = DB::table('pekerjaan')->where('id_jobOrder', $id)->get();
 
    	// mengirim data pegawai ke view index
    	return view('listpekerjaan',['users' => $users]);
});
Route::post('/pekerjaan/store','PekerjaanController@store')->middleware('auth');


// User
Route::get('/user','UserController@index')->middleware('auth');
Route::get('/user/tambah', 'UserController@tambah')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

