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

Route::get('/', 'FrontController@index')->name('/');
Route::get('contact', 'FrontController@contact');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin')->middleware('auth');

Route::resource('usuario','UsuarioController')->middleware('check.role', 'auth');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
