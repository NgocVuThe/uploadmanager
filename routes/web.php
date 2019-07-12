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

Route::get('/login', 'AdminLoginController@getLogin')->name('get_login');
Route::post('/login', 'AdminLoginController@postLogin')->name('post_login');
Route::get('/register', 'AdminLoginController@register')->name('get_register');
Route::post('/register', 'UserController@store')->name('post_register');
Route::get('/logout', 'AdminLoginController@logout')->name('get_logout');
