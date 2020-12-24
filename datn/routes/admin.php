<?php
use Illuminate\Support\Facades\Route;

Route::group([
        "prefix" => "admin",
        'as' => 'admin.',
    ], function () {
    Route::get('/', 'DashboardController@index')
        ->name("dashboard.index");

    //-- Categories
    Route::group([
        "prefix" => "categories",
        'as' => 'category.',
    ], function () {
        Route::get('/', 'CategoryController@index')
            ->name("index");
    });

    //-- Posts
    Route::group([
        "prefix" => "posts",
        'as' => 'post.',
    ], function () {
        Route::get('/', 'PostController@index')
            ->name("index");
    });

    //-- Customers
    Route::group([
        "prefix" => "customers",
        'as' => 'customer.',
    ], function () {
        Route::get('/', 'CustomerController@index')
            ->name("index");
    });
});