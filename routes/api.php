<?php

use Illuminate\Http\Request;

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

//Route::post('register', 'UserController@register');
//Route::post('login', 'UserController@authenticate');
//Route::get('open', 'DataController@open');
//Route::get('users', 'UserController@getAllUsers');
//Route::get('users/{id}', 'UserController@getUserById');
//Route::group(['middleware' => ['jwt.verify']], function() {
//    Route::get('user', 'UserController@getAuthenticatedUser');
//    Route::get('closed', 'DataController@closed');
//});

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('auth/user', 'AuthController@user');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
    Route::get('auth/refresh', 'AuthController@refresh');
});
