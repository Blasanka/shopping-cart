<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'ProductController@index',
    'as' => 'product.index'
]);

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/register', [
            'uses' => 'UserController@register',
            'as' => 'register'
        ]);
    
        Route::post('/register', [
            'uses' => 'UserController@saveUser',
            'as' => 'register'
        ]);
        
        Route::get('/login', [
            'uses' => 'UserController@login',
            'as' => 'login'
        ]);
        
        Route::post('/login', [
            'uses' => 'UserController@getUser',
            'as' => 'login'
        ]);
    });
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile', [
            'uses' => 'UserController@profile',
            'as' => 'profile'
        ]);
        
        Route::get('/logout', [
            'uses' => 'UserController@logout',
            'as' => 'logout'
        ]);
    });
});