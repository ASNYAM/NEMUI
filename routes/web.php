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

Route::get('/', 'IreulController@index');
Route::resource('ireuls','IreulController', ['except' => ['edit', 'destroy', 'update']]);
Route::post('ireuls/{id}/result', 'IreulController@result')->name('ireuls.result');