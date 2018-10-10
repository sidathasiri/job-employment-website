<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'index'
]);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [
        'uses' => 'AdminController@getSignin',
        'as' => 'getsignin'
    ]);
    
    Route::post('/signin', [
        'uses' => 'AdminController@postSignin',
        'as' => 'postsignin'
    ]);
    
    Route::get('/profile', [
        'uses' => 'AdminController@getProfile',
        'as' => 'profile'
    ]);
    
    Route::get('/logout', [
        'uses' => 'AdminController@getLogout',
        'as' => 'logout'
    ]);
});
