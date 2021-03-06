<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as'   => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('topics/{tid}', [
    'as'   => 'topics.show',
    'uses' =>'TopicsController@show'
]);

Route::get('/products/{pid?}', [
    'as'   => 'products.show',
    'uses' => 'ProductController@showProduct'
]);

Route::get('/categories', [
    'as'   => 'categories',
    'uses' => 'PagesController@categories'
]);

Route::get('/categories/{cid?}', [
    'as'   => 'categories.show',
    'uses' => 'PagesController@showCategoriesProducts'
]);


/*
|--------------------------------------------------------------------------
|  Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/user/login', [
	'as'   => 'login',
	'uses' => 'Auth\AuthController@showLogin'
]);
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/weibo', 'Auth\AuthController@weibo');
Route::get('auth/weibo/callback', 'Auth\AuthController@weiboCallback');
