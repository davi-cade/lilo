<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::group(['middleware' => ['auth']], function(){

    Route::get('/redirect', 'App\Http\Controllers\RedirectController@index')->name('redirect');

    Route::group(['middleware' => ['role:administrator']], function() {
        Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    });

    Route::group(['middleware' => ['role:user']], function() {
        Route::get('/painel', function () {return view('painel');})->name('painel');
    });
   
});


require __DIR__.'/auth.php';

