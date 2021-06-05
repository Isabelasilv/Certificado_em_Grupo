<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('escola', 'EscolaController');
Route::get('escola/delete/{id}','EscolaController@destroy');

Route::resource('palestra', 'PalestraController');
Route::get('palestra/delete/{id}','PalestraController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
