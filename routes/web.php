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
Route::get('category', '\App\Http\Controllers\Portal\CategoryController@index')->name('category.index');
Route::get('category/{category}', '\App\Http\Controllers\Portal\CategoryController@posts')->name('category.posts');

// admin
Route::get('admin/post/index', '\App\Http\Controllers\Admin\PostController@index')->name('admin.post.index');
Route::get('admin/post/create', '\App\Http\Controllers\Admin\PostController@create');
Route::post('admin/post/store', '\App\Http\Controllers\Admin\PostController@store');
Route::get('admin/post/edit/{post}', '\App\Http\Controllers\Admin\PostController@edit')->name('admin.post.edit');
Route::put('admin/post/update/{post}', '\App\Http\Controllers\Admin\PostController@update')->name('admin.post.update');
Route::get('admin/post/delete/{post}', '\App\Http\Controllers\Admin\PostController@delete')->name('admin.post.delete');
Route::redirect('admin', 'admin/post/index');

Auth::routes();
