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

// Route::get('/product/{pid?}', function($id="1") {
// 	return 'product'.$id;
// });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    // 
});
