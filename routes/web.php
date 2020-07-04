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
})->name('main');


Auth::routes();

//backend Routes
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
	Route::resource('user', 'UserController');
	Route::resource('role', 'Backend\RoleController');
	Route::resource('permission', 'Backend\PermissionController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resource('createmenu','Backend\CreateMenuController');
	Route::resource('/itemcategory','Backend\ItemCategoryController');
	Route::get('/item','Backend\CreateMenuController@item')->name('menu.item');
	Route::post('/{id}/orderstatus','Backend\OrderController@changestatus')->name('order.status');
	Route::get('/receivedorders','Backend\OrderController@receivedOrders')->name('order.received');
	Route::get('/acceptedorders','Backend\OrderController@acceptedOrders')->name('order.accepted');
	Route::get('/rejecteddorders','Backend\OrderController@rejectedOrders')->name('order.rejected');
	Route::get('/{userid}/user/{id}/order','Backend\OrderController@orderDetails')->name('order.details');
	Route::post('/changestatus','Backend\OrderController@changeAllStatus')->name('order.changeallstatus');


});


//frontend routes
Route::get('/menu','Frontend\MenuController@index')->name('menu.view');
Route::get('/menu/{category}','Frontend\MenuController@categoryView')->name('menu.category.view');
Route::get('/cart','Frontend\CartController@index')->name('cart.view');
Route::post('/cart','Frontend\CartController@store')->name('cart.store');
Route::get('/cart/{id}/remove','Frontend\CartController@destroy')->name('cart.destroy');
Route::get('search','Frontend\MenuController@search')->name('search');
Route::resource('/{service}/checkout','Frontend\CheckoutController');



Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\SocialAuthController@handleProviderCallback');




