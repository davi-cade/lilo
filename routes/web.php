<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth;

Route::view('/', 'landing-page');

Route::group(['middleware' => ['auth', 'verified']], function(){
        
    Route::get('/redirect', App\Http\Controllers\RedirectController::class)->name('redirect');
        
    Route::group(['middleware' => ['role:administrator']], function() {
        Route::get('/dashboard', 'App\Http\Controllers\Administrator\AdminDashboardController@index')->name('dashboard');
        Route::get('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@create');
        Route::post('/dashboard/registro', 'App\Http\Controllers\Auth\RegisteredAdminController@store');

        Route::resource('missions', App\Http\Controllers\ResourceControllers\MissionController::class);
        Route::resource('module', App\Http\Controllers\ResourceControllers\ModuleController::class);
    });

    Route::resource('perfil', App\Http\Controllers\ResourceControllers\UserController::class);
    Route::view('/nickname', 'RegisterNickname.nickname');

    Route::group(['middleware' => ['role:user', 'playerExists']], function() {
        Route::get('/home', 'App\Http\Controllers\User\UserDashboardController@index');
        Route::get('/missions', 'App\Http\Controllers\ResourceControllers\MissionController@index');
    });
          
});

require __DIR__.'/auth.php';

