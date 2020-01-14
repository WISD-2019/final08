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
Route::get('/memberstore', ['as' => 'member.store','uses' =>'MembersController@store']);
//修改會員資料
Route::get('/member/update', ['as' => 'member.update','uses' =>'MembersController@update']);
//顯示所有收容所
Route::get('/shelter', ['as' => 'shelter.show','uses' =>'ShelterController@show']);
//顯示所有動物
Route::get('/animal', ['as' => 'animal.show','uses' =>'AnimalController@show']);
//搜尋動物編號
Route::get('/animalsearch', ['as' => 'animal.search','uses' =>'AnimalController@search']);
//申請領養動物
Route::get('/applicationcreate{animal}', ['as' => 'applicaion.create','uses' =>'ApplicationController@create']);
//儲存領養資訊
Route::get('/application/create/{animal}/store', ['as' => 'applicaion.store','uses' =>'ApplicationController@store']);
//顯示領養公告
Route::get('/post', ['as' => 'post.show','uses' =>'PostController@show']);
//新增領養狀況
Route::get('/adoptionstatuscreate', ['as' => 'adoptionstatus.create','uses' =>'AdoptionstatusController@create']);
//儲存領養狀況
Route::get('/adoptionstatusstore', ['as' => 'adoptionstatus.store','uses' =>'AdoptionstatusController@store']);

//收容所人員相關的功能
//跳轉至新增收容動物畫面
Route::get('/addanimal', ['as' => 'staff.addanimal','uses' =>'StaffController@addanimal']);
//儲存動物
Route::get('/storeanimal', ['as' => 'staff.storeanimal','uses' =>'StaffController@storeanimal']);
//顯示所有動物
Route::get('/shelteranimal', ['as' => 'shelter.animal','uses' =>'ShelterController@animal']);
//刪除動物
Route::get('/deleteanimal/{animal}', ['as' => 'staff.deleteanimal','uses' =>'StaffController@deleteanimal']);
//跳轉至新增公告畫面
Route::get('/createpost', ['as' => 'post.create','uses' =>'PostController@create']);
//儲存公告
Route::get('/storepost', ['as' => 'post.store','uses' =>'PostController@store']);
//審查領養訊息
Route::get('/application', ['as' => 'application.show','uses' =>'ApplicationController@show']);
//申請通過
Route::get('/application/{application}/pass', ['as' => 'application.pass','uses' =>'ApplicationController@pass']);
//查看領養狀況
Route::get('/adoptionstatus/show', ['as' => 'adoptionstatus.show','uses' =>'AdoptionstatusController@show']);

