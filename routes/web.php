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
Route::get('/orders', 'HomeController@orders')->name('orders');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('welcome', 'HomeController@welcome')->name('main');
//Route::get('trending', 'trendingController@index')->name('trending');
Route::get('create', 'trendingController@create')->name('create');

//Route::get('trending', [
//	'uses' => 'PostController@getFeed',
//	'as' => 'trending'
//]);

Route::get('trending', [
    'uses' => 'postController@getDashboard',
    'as' => 'trending',
    'middleware' => 'auth'

]);

Route::post('createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create'
]);

Route::post('orders', [
    'uses' => 'HomeController@orders',
    'as' => 'layouts.orders'
]);


Route::get('products/displaygrid', [
    'uses' => 'productController@displaygrid',
    'as' => 'products.displaygrid',

]);

Route::get('products/index', [
    'uses' => 'productController@index',
    'as' => 'products.index',

])->middleware('auth');;
Route::get('products/create', [
    'uses' => 'productController@create',
    'as' => 'products.create',

]);
Route::delete('products/destroy{id}', 'productController@destroy')->name('products.destroy');


Route::get('products/show', [
    'uses' => 'productController@show',
    'as' => 'products.show',

]);

Route::get('products/edit/{id}}', [
    'uses' => 'productController@edit',
    'as' => 'products.edit',

]);
Route::post('products/store', [
    'uses' => 'productController@store',
    'as' => 'products.store',

]);
Route::patch('products/update/{request}', [
    'uses' => 'productController@update',
    'as' => 'products.update',

]);


Route::post('count', [
    'uses' => 'PostController@getPostCount',
    'as' => 'post.count'
]);
Route::get('scorders/checkout', 'scorderController@checkout')->name('scorders.checkout');
Route::post('scorders/placeorder', 'scorderController@placeorder')->name('scorders.placeorder');
Route::get('products/additem/{id}', 'productController@additem')->name('products.additem');
Route::get('products/emptycart', 'productController@emptycart')->name('products.emptycart');



//Route::resource('products', 'productController');


