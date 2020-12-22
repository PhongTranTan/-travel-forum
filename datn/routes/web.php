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

Route::get('/', 'BaseController@index')->name("page.home");
Route::get('about', 'BaseController@about')->name("page.about");
Route::get('profile', 'BaseController@profile')->name("page.profile");
Route::post('search', 'BaseController@search')->name("page.search");
Route::get('signup', 'BaseController@signup')->name("page.signup");
Route::get('forgot', 'BaseController@forgot')->name("page.forgot");
Route::get('detail', 'BaseController@detail')->name("page.detail");

