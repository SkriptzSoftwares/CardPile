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

Route::get('/test', function () {
    return view('auth.verify');
});

//Admin
Route::get('admin', 'AdminController@index')->middleware('auth')->middleware("admin");

Route::resource('admin/packages', 'PackagesController')->middleware('auth')->middleware("admin");
