<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('admin', 'DashboardController@index')->name("admin.dashboard.index");
// Route::group(["prefix" => "admin"], function () {
//     Route::get('/', 'DashboardController@index')->name("admin.dashboard.index");
// });
