<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/{service}', 'OAuthLoginController@getGoogleAuth')->where('service', 'google');
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/', function (Request $request) {
    if ($request->input('state')) {
        return view('home');
    }
    return view('welcome');
});

Route::get('twitter', 'TwitterController@index');
