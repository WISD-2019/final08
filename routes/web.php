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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//顯示所有收容所
Route::get('/shelter', ['as' => 'shelter.show','uses' =>'ShelterController@show']);

//顯示所有動物
Route::get('/animal/all', ['as' => 'animal.show','uses' =>'AnimalController@show']);

