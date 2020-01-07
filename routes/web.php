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

//Route::get('/', function () {
//    return view('welcome');
//});
//首頁
Route::get('/', ['as' => 'member.refuge','uses' =>'MembersController@refuge']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//會員相關的功能
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

//收容所人員相關的功能
//跳轉至新增收容動物畫面
Route::get('/addanimal', ['as' => 'staff.addanimal','uses' =>'StaffController@addanimal']);
//儲存動物
Route::get('/storeanimal', ['as' => 'staff.storeanimal','uses' =>'StaffController@storeanimal']);

