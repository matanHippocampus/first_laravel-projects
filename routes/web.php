<?php

Route::get('/', 'PagesController@index');
Route::get("/about", 'PagesController@about');
Route::get("/services", 'PagesController@services');

Route::resource('posts','PostsControllers');
Auth::routes();

Route::get('/dashboard', 'DashBoardController@index');
