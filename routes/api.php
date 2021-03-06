<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//soal
Route::resource('soal', 'Api\Soal\SoalController')->except([
    'create', 'edit'
]);
//user
Route::resource('user', 'Api\User\UserController')->except([
    'create', 'edit'
]);

//user login
Route::post('user/login', 'Api\User\UserController@login');


//pengaturan
Route::get('peraturan', 'Api\Peraturan\PeraturanController@index');
Route::put('peraturan', 'Api\Peraturan\PeraturanController@update');

//Nilai or Hasil
Route::get('nilai', 'Api\Nilai\NilaiController@index');
Route::get('nilai/{android_id}', 'Api\Nilai\NilaiController@show');
Route::delete('nilai/{nilai}', 'Api\Nilai\NilaiController@destroy');

Route::get('dashboard', 'Api\Nilai\NilaiController@dashboard');

Route::get('testing', 'Api\Peraturan\PeraturanController@testing');
