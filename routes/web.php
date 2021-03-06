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

// Site part
Route::get('/', 'VignettesController@index');
Route::get('/show/{id}', 'VignettesController@showOne');

// Admin part
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/vignettes/{id?}', 'AdminController@show')->where('id', '[0-9]+');
Route::get('/admin/vignettes/new', 'AdminController@showForm');
Route::post('/admin/vignettes/create', 'AdminController@create');
Route::put('/admin/vignettes/update/{id}', 'AdminController@update');
Route::get('/admin/vignettes/remove/{id}', 'AdminController@remove');

// Generated code
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');