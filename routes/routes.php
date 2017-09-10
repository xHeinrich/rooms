<?php

use Illuminate\Support\Facades\Route;

Route::get('/rooms', 'RoomsController@index');
Route::get('/rooms/{id}', 'RoomsController@show');
Route::post('/rooms/{id}/message/create', 'RoomsController@create');
