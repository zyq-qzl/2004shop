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

Route::get('/name',function(){
	echo date('Y-m-d H:i:s');

});

Route::prefix('文件名')->group(function(){

});




Route::get('index',"TextController@index");
Route::get('add',"TextController@add");
Route::any('create',"TextController@create");



Route::any('index',"AdminController@index");

Route::any('test',"IndexController@test");


//用户
Route::prefix('user')->group(function(){
	Route::get('create',"AdminController@create");
	Route::any('index',"AdminController@index");
});