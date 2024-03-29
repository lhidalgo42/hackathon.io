<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::get('/register','UsersController@create');
Route::post('/api/auth/token','SessionsController@token');
Route::post('/api/auth/login','SessionsController@ajaxStore');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
Route::get('/', ['as' => 'home', 'uses' => 'UsersController@index']);
