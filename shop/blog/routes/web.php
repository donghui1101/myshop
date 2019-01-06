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
/*
	  admin route
*/
/*	admin index  route */
Route::get('admin/index','admin\IndexController@index');
/*	admin cates route  */
Route::resource('admin/cates','admin\CatesController',['except'=>['show']]);
/* admin goods route   */
Route::resource('admin/goods','admin\GoodsController');
/*
	 home route
*/
/* home cates*/
Route::get('/','home\IndexController@index');
/* login*/
Route::resource('home/login','home\LoginController');



// 后台添加用户的路由
Route::resource('admin/users','admin\UsersController');
