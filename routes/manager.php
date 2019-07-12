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
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['checkAdminLogin', 'web']], function() {
    
    Route::get('/list-file', 'FileUploadController@index')->name('manager.list.file');
    Route::get('/create-file', 'FileUploadController@create')->name('manager.create.file');

    Route::post('/create-file', 'FileUploadController@save')->name('manager.save.file');
    Route::get('/list-folder', 'FolderUploadController@index')->name('manager.list.folder');
    Route::get('/create-folder', 'FolderUploadController@create')->name('manager.create.folder');
    Route::get('/list-user', 'UserController@index');
    Auth::routes();
});

