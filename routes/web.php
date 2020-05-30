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

Route::group(['middleware' => 'admin'], function () {
	Route::resource('user', 'UserController');
	Route::resource('role', 'Backend\RoleController');
	Route::resource('permission', 'Backend\PermissionController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/menu',function(){
    return view('frontend.menu.fullmenu');
})->name('menu.view');
Route::get('/cart','frontend\CartController@index')->name('cart.view');

Route::post('/cart','frontend\CartController@store')->name('cart.store');
Route::get('/empty',function(){
	return Cart::session(4)->remove(1);
});
