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
 
Route::get('/', 'WelcomeController@index');

Route::get('/shop', 'ShopsController@getIndex1');

Route::get('/show', 'ShopsController@getIndex2');

Route::get('/show', 'CommentsController@getIndex');
