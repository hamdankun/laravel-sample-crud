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

// Route::get('/', function () {
//     return view('welcome');
// });

// route yang menampilkan sebuah halaman HTML 
Route::get('/stuff', 'StuffController@index');
Route::get('/stuff/create', 'StuffController@create');
Route::get('/stuff/{id}/show', 'StuffController@show');
Route::get('/stuff/{id}/edit', 'StuffController@edit');

// route yang hanya memproses sebuah request
Route::post('/stuff', 'StuffController@store');
Route::put('/stuff/{id}', 'StuffController@update');
Route::delete('/stuff/{id}', 'StuffController@destroy');