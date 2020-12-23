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
});