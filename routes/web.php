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

//會員資料
Route::get('/member', ['as' => 'member.show','uses' =>'MembersController@show']);
//儲存會員資料
Route::get('/member/store', ['as' => 'member.store','uses' =>'MembersController@store']);
//修改會員資料
Route::get('/member/update', ['as' => 'member.update','uses' =>'MembersController@update']);

//顯示所有收容所
Route::get('/shelter', ['as' => 'shelter.show','uses' =>'ShelterController@show']);

//顯示所有動物
Route::get('/animal/all', ['as' => 'animal.show','uses' =>'AnimalController@show']);
//搜尋動物編號
Route::get('/animal/search', ['as' => 'animal.search','uses' =>'AnimalController@search']);
//申請領養動物
Route::get('/application/create/{animal}', ['as' => 'applicaion.create','uses' =>'ApplicationController@create']);
//儲存領養資訊
Route::get('/application/create/{animal}/store', ['as' => 'applicaion.store','uses' =>'ApplicationController@store']);
