<?php
use Illuminate\Support\Facades\Route;

Route::group([
        "prefix" => "admin-vt",
        'as' => 'admin.',
    ], function () {
    
    //-- Dashboard
    Route::get('/', 'DashboardController@index')
        ->name("dashboard.index");

    //-- Categories
    Route::group([
        "prefix" => "categories",
        'as' => 'category.',
    ], function () {
        Route::get('/', 'CategoryController@index')
            ->name("index");
        Route::get('create', 'CategoryController@create')
            ->name("create");
        Route::post('store', 'CategoryController@store')
            ->name("store");
        Route::get('edit/{id}', 'CategoryController@edit')
            ->name("edit");
        Route::put('update/{id}', 'CategoryController@update')
            ->name("update");
        Route::delete('delete/{id}', 'CategoryController@delete')
            ->name("delete");
    });

    //-- Posts
    Route::group([
        "prefix" => "posts",
        'as' => 'post.',
    ], function () {
        Route::get('/', 'PostController@index')
            ->name("index");
        Route::get('create', 'PostController@create')
            ->name("create");
        Route::post('store', 'PostController@store')
            ->name("store");
        Route::get('edit/{id}', 'PostController@edit')
            ->name("edit");
        Route::put('update/{id}', 'PostController@update')
            ->name("update");
        Route::delete('delete/{id}', 'PostController@delete')
            ->name("delete");
    });

    //-- Customers
    Route::group([
        "prefix" => "customers",
        'as' => 'customer.',
    ], function () {
        Route::get('/', 'CustomerController@index')
            ->name("index");
        Route::get('view', 'CustomerController@view')
            ->name("view");
        Route::get('update/{id}', 'CustomerController@update')
            ->name("update");
    });
});