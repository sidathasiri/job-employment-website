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

Route::get('/about', [
    'uses' => 'PostController@getAbout',
    'as' => 'about'
]);

Route::get('/contact', [
    'uses' => 'PostController@getContact',
    'as' => 'contact'
]);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [
        'uses' => 'AdminController@getSignin',
        'as' => 'getsignin',
        'middleware' => 'guest'
    ]);
    
    Route::post('/signin', [
        'uses' => 'AdminController@postSignin',
        'as' => 'postsignin',
        'middleware' => 'guest'
    ]);

    Route::post('/signup', [
        'uses' => 'AdminController@postSignup',
        'as' => 'postsignup',
        'middleware' => 'guest'
    ]);
    
    Route::get('/profile', [
        'uses' => 'AdminController@getProfile',
        'as' => 'profile',
        'middleware' => 'auth'
    ]);

    Route::get('/dashboard', [
        'uses' => 'AdminController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('/add-new-job', [
        'uses' => 'AdminController@getAddNew',
        'as' => 'addnew',
        'middleware' => 'auth'
    ]);
    
    Route::get('/logout', [
        'uses' => 'AdminController@getLogout',
        'as' => 'logout',
        'middleware' => 'auth'
    ]);

    Route::post('/updateEmail', [
        'uses' => 'AdminController@updateEmail',
        'as' => 'updateEmail',
        'middleware' => 'auth'
    ]);

    Route::post('/updatePassword', [
        'uses' => 'AdminController@updatePassword',
        'as' => 'updatePassword',
        'middleware' => 'auth'
    ]);
});
