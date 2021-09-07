<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth;

Route::view('/', 'homeloanding');

Route::group(['middleware' => ['auth']], function(){
    
    Route::group(['middleware' => ['verified']], function(){
        
        Route::get('/redirect', 'App\Http\Controllers\ResourceControllers\RedirectController@index')->name('redirect');
        
        Route::group(['middleware' => ['role:administrator']], function() {
            Route::get('/dashboard', 'App\Http\Controllers\Administrator\AdminDashboardController@index')->name('dashboard');
            Route::get('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@create');
            Route::post('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@store');
        });

        Route::group(['middleware' => ['role:user']], function() {
            Route::get('/home', 'App\Http\Controllers\User\UserDashboardController@index');
        });
    });
          
});

require __DIR__.'/auth.php';

