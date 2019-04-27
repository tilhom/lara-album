<?php

Route::get('/', 'AlbumController@index');
// Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumController@create');
Route::post('/albums/store', 'AlbumController@store'); 
Route::get('/albums/{id}', 'AlbumController@show'); 
Route::get('/photos/create/{id}', 'PhotoController@create');
Route::post('/photos/store', 'PhotoController@store');   
Route::get('/photos/{id}', 'PhotoController@show');
Route::delete('/photos/{id}', 'PhotoController@destroy');        