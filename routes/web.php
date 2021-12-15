<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth;

Route::view('/', 'landing-page');

Route::group(['middleware' => ['auth', 'verified']], function(){
    
    Route::get('/redirect', App\Http\Controllers\RedirectController::class)->name('redirect');
        
    Route::group(['middleware' => ['role:administrator|superadministrator'], 'prefix' => 'admin'], function() {
        
        Route::get('/home', 'App\Http\Controllers\Administrator\AdminDashboardController@index');
        Route::get('/profile', 'App\Http\Controllers\administrator\AdminProfileController@edit');

        Route::view('/users', 'administrator.users.index');
        
        Route::resource('module', App\Http\Controllers\ResourceControllers\ModuleController::class);
        Route::post('/module/publish', 'App\Http\Controllers\ResourceControllers\ModuleController@store');

        Route::resource('missions', App\Http\Controllers\ResourceControllers\MissionController::class);
        Route::post('/missions/publish', 'App\Http\Controllers\ResourceControllers\MissionController@store');

        Route::view('/chat/{slug}', 'administrator.chat.index');

        Route::group(['middleware' => ['role:superadministrator']], function() {
            Route::get('/register', 'App\Http\Controllers\Auth\RegisteredAdminController@create');
            Route::post('/register', 'App\Http\Controllers\Auth\RegisteredAdminController@store');
            Route::get('/reports', 'App\Http\Controllers\administrator\ReportController@index');
        });
    });
    
    Route::view('/nickname', 'RegisterNickname.nickname');

    Route::group(['middleware' => ['role:user', 'playerExists']], function() {
        
        Route::get('/home', 'App\Http\Controllers\User\UserDashboardController@index');
        Route::get('/profile', 'App\Http\Controllers\user\UserProfileController@edit');

        Route::get('/module/{$slug}', 'App\Http\Controllers\ResourceControllers\ModuleController@show');
        Route::get('/missions', 'App\Http\Controllers\ResourceControllers\MissionController@index');
        
        Route::resource('group', App\Http\Controllers\ResourceControllers\GroupController::class);
        Route::post('/group/publish', 'App\Http\Controllers\ResourceControllers\GroupController@store');

        Route::group(['middleware' => ['enoughChances']], function() {

        });

    });
          
});


require __DIR__.'/auth.php';

