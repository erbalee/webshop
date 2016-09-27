<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'NewsController@listNews');

Route::get('/contact', 'PagesController@contact');
Route::get('/groups', 'PagesController@groups');


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/admin/adminindex', 'AdminController@index');
Route::get('/admin', 'AdminController@index');

Route::get('/groups/show/{id}', 'PagesController@showGroup');
Route::get('/admin/news', 'AdminController@news');