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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('articles','ArticleController@index')->name('index');
Route::get('article/create','ArticleController@create')->name('create');
// Route::post('article/store','ArticleController@store')->name('store');
Route::get('article/edit/{id}','ArticleController@edit')->name('edit');
// Route::put('article/update/{id}','ArticleController@update')->name('update');
// Route::delete('article/delete/{id}','ArticleController@destroy')->name('delete');



