<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/dogs', 'DogController@store')->name('dogs.store');
Route::get('/dogs', 'DogController@index')->name('dogs.index');
Route::delete('dogs/{id}', 'DogController@destroy')->name('dogs.destroy');
Route::get('/dogs/{id}/edit', 'DogController@edit')->name('dogs.edit');
Route::post('/dogs/{id}', 'DogController@update')->name('dogs.update');
