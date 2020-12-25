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

//-- General
Route::get('/', 'BaseController@index')
    ->name("page.home");
Route::get('search', 'BaseController@search')
    ->name("page.search");
Route::get('detail', 'BaseController@detail')
    ->name("page.detail");
Route::get('about', 'BaseController@about')
    ->name("page.about");

//-- Customers
Route::get('profile', 'CustomerController@profile')
    ->name("page.profile");
Route::post('profile', 'CustomerController@postProfile')
    ->name("post.profile");
Route::get('signup', 'CustomerController@signup')
    ->name("page.signup");
Route::post('signup', 'CustomerController@postSignup')
    ->name("post.signup");
Route::get('forgot', 'CustomerController@forgot')
    ->name("page.forgot");
Route::post('forgot', 'CustomerController@postForgot')
    ->name("post.forgot");
Route::post('review', 'CustomerController@postReview')
    ->name("post.review");


