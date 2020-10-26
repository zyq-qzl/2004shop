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



//查看ip地址
Route::get('/ip',function(){
	$ip = $_SERVER['REMOTE_ADDR'];
	echo "客户IP:".$ip;die;
	echo '<pre>';print_r($_SERVER);echo "</pre>";
});


//redis
Route::get('redis1',"IndexController@redis1");
Route::get('redis2',"IndexController@redis2");
Route::get('redis3',"IndexController@redis3");


//Route::get('index',"TextController@index");
//Route::get('add',"TextController@add");
//Route::any('create',"TextController@create");

Route::any('test',"IndexController@test");
Route::get('api1',"IndexController@api1");


//用户
Route::prefix('admin')->group(function(){
	Route::any('create',"AdminController@create");
	Route::any('store',"AdminController@store");
	Route::any('index',"AdminController@index");
	//Route::get('store',"AdminController@strore");
});



//商品详情
Route::get('detail',"IndexController@detail");
Route::get('list',"IndexController@list");


//登陆注册
Route::prefix('user')->group(function(){
	Route::any('regist',"UserController@regist");
	Route::any('doRegist',"UserController@doRegist");
	Route::any('login',"UserController@login");
	Route::any('doLogin',"UserController@doLogin");
});



//后台
//登录
Route::get('/index/login',"Index\LoginController@login");
Route::post('/index/doLogin',"Index\LoginController@dologin");
//注册
Route::get('/index/register',"Index\LoginController@register");
Route::any('/index/doRegister',"Index\LoginController@doRegister");
//首页
Route::get('/index/index',"Index\IndexController@index");
//商品详情
Route::get('/index/item',"Index\IndexController@item");
//商品列表
Route::get('/index/list',"Index\IndexController@list");
//商品收藏
Route::get('/index/fav',"Index\IndexController@fav");
//购物车
Route::get('/index/cart',"Index\CartController@index");
Route::post('/index/cartadd',"Index\CartController@cartadd");
//订单
Route::get('/index/home-index',"Index\HomeindexController@home");

Route::get('/index/getorderinfo',"Index\OrderController@getorderinfo");

Route::get('/index/pay',"Index\PayController@pay");