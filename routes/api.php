<?php

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

Route::namespace('Api')->name('api.')->group(function () {
    Route::namespace('Auth')->name('auth.')->prefix('auth')->group(function () {
        Route::middleware('guest')->group(function () {
            Route::post('/login', 'LoginController@login')->name('login');
        });

        Route::middleware('auth:airlock')->group(function () {
            Route::get('/user', 'LoginController@user')->name('user');
            Route::post('/logout', 'LoginController@logout')->name('logout');
        });
    });

    Route::middleware('auth:airlock')->group(function () {
        Route::apiResource('users', 'UsersController')->middleware('admin');
        Route::apiResource('subjects', 'SubjectsController');
        Route::apiResource('questions', 'QuestionsController')
            ->except('index', 'store');
        Route::apiResource('subjects/{subject}/questions', 'SubjectQuestionsController')
            ->only('index', 'store');
        Route::apiResource('answers', 'AnswersController')
            ->except('index', 'store');
        Route::apiResource('questions/{question}/answers', 'QuestionAnswersController')
            ->only('index', 'store');
    });
});
