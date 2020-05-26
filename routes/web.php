<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','UserController@returnView');
Route::post('/registerr', 'UserController@register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
