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

Route::get('/', '\App\Http\Controllers\Portal\PostController@index');
Route::get('archives', '\App\Http\Controllers\Portal\PostController@archives')->name('archives');
Route::get('p/{post}', '\App\Http\Controllers\Portal\PostController@show')->name('post.show');
