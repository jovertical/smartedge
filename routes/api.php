<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->name('api.')->group(function (): void {
    Route::namespace('Auth')->name('auth.')->prefix('auth')->group(function (): void {
        Route::middleware('guest')->group(function () {
            Route::post('/login', 'LoginController@login')->name('login');
        });

        Route::middleware('auth:airlock')->group(function (): void {
            Route::get('/user', 'LoginController@user')->name('user');
            Route::post('/logout', 'LoginController@logout')->name('logout');
        });
    });
});
