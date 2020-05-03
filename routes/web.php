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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('main', 'mainController@index')->name('main');
//Route::get('trending', 'trendingController@index')->name('trending');
Route::get('create', 'trendingController@create')->name('create');

//Route::get('trending', [
//	'uses' => 'PostController@getFeed',
//	'as' => 'trending'
//]);

Route::get('trending', [
    'uses' => 'postController@getDashboard',
    'as' => 'trending',

]);

Route::post('createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create'
]);


Route::get('products/displaygrid', [
    'uses' => 'productController@displaygrid',
    'as' => 'products.displaygrid',

]);

Route::post('count', [
    'uses' => 'PostController@getPostCount',
    'as' => 'post.count'
]);
Route::get('scorders/checkout', 'scorderController@checkout')->name('scorders.checkout');
Route::post('scorders/placeorder', 'scorderController@placeorder')->name('scorders.placeorder');
Route::get('products/additem/{id}', 'productController@additem')->name('products.additem');
Route::get('products/emptycart', 'productController@emptycart')->name('products.emptycart');
Route::resource('products', 'productController');


