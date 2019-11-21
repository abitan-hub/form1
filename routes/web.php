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

Route::get('/form', function () {
    return view('form');
});
Route::get('/', function () {
    return view('index');
});
Route::post('/store','studentcontroller@store')->name('store');
Route::get('/table','studentcontroller@index')->name('table');
Route::get('/show/{id}','studentcontroller@show')->name('show');
Route::delete('/delete/{id}','studentcontroller@destroy')->name('delete');
Route::get('/edit/{id}','studentcontroller@edit')->name('edit');
Route::patch('/update/{id}','studentcontroller@update')->name('update');