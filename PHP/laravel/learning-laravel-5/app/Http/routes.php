<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::get('articles', 'ArticlesController@index');

Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');

