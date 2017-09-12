<?php

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');

Route::get('/note', 'NoteController@form')->name('note');
Route::post('/note', 'NoteController@store')->name('note.store');
Route::get('/note/{url}', 'NoteController@show')->name('note.show');

Route::get('/{url}', 'FileController@downloadPage');
Route::get('/{url}/download', 'FileController@download');
Route::post('/{url}/download', 'FileController@download');

Route::post('/zip/{hash}', 'FileController@zip');

Route::post('/upload', 'FileController@upload');
