<?php


Route::get('/', function () {
    return view('welcome');
});

// JOB ORDER
Route::get('/joborder', 'JoborderController@list')->middleware('auth');
Route::get('/joborder/tambah', 'JoborderController@tambah')->middleware('auth');
Route::get('/joborder/{id}', 'JoborderController@edit')->middleware('auth');
Route::post('/joborder/store','JobOrderController@store')->middleware('auth');
Route::post('/joborder/update','JobOrderController@update')->middleware('auth');
Route::get('/joborder/delete/{id}','JobOrderController@delete')->middleware('auth');


// PEKERJAAN
Route::get('/pekerjaan', 'PekerjaanController@list')->middleware('auth');
Route::get('/pekerjaan/tambah/{id}', 'PekerjaanController@tambah')->middleware('auth');
Route::get('/pekerjaan/{id}', 'PekerjaanController@getid');
Route::get('/pekerjaan/edit/{id}', 'PekerjaanController@edit');
Route::get('/pekerjaan/delete/{id}','PekerjaanController@delete')->middleware('auth');
Route::post('/pekerjaan/update','PekerjaanController@update')->middleware('auth');
Route::post('/pekerjaan/store','PekerjaanController@store')->middleware('auth');


// User
Route::get('/user','UserController@index')->middleware('auth');
Route::get('/user/tambah', 'UserController@tambah')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

