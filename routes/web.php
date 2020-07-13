<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function (Request $request) {
    if ($request->input('state')) {
        return view('home');
    }
    return view('welcome');
});

Route::get('twitter', 'TwitterController@index');
Route::get('makeCsv', 'TwitterController@makeCsv');

Route::get('putJson', 'HomeController@putJson');
Route::get('getJson', 'HomeController@getJson');
Route::prefix('auth')->middleware('guest')->group(function() {
    Route::get('/{service}', 'OAuthLoginController@getGoogleAuth')
        ->where('service', 'google');
    // Route::get('api/login/google/callback', 'Auth\LoginController@handleGoogleCallback');

});
