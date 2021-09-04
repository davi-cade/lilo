<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/redirect', 'App\Http\Controllers\RedirectController@index')->name('redirect');

    Route::group(['middleware' => ['role:administrator']], function() {
        Route::get('/dashboard', 'App\Http\Controllers\administrator\AdminDashboardController@index')->name('dashboard');
        Route::get('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@create');
        Route::post('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@store');
    });

    Route::group(['middleware' => ['role:user']], function() {
        Route::get('/home', 'App\Http\Controllers\user\UserDashboardController@index');
    }); 
});


require __DIR__.'/auth.php';

