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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/shop', 'HomeController@shop');

Route::get('/shop/{id}', 'HomeController@item');

//Admin
Route::get('admin', 'AdminController@index')->middleware('auth')->middleware("admin");

Route::resource('admin/packages', 'PackagesController')->except(['show'])->middleware('auth')->middleware("admin");

Route::get('admin/market', 'AdminController@MarketSettings')->middleware('auth')->middleware("admin");

Route::resource('/admin/alerts', 'AlertsController')->except(['index, show, create, edit'])->middleware('auth')->middleware("admin");


