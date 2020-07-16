<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('twitter', 'TwitterController@index');


Route::get('diseases', 'RequestController@diseases');
Route::get('infections', 'RequestController@infections');
Route::get('inf_measures', 'RequestController@inf_measures');
Route::get('inf_persons', 'RequestController@inf_persons');
Route::get('inf_predicts', 'RequestController@inf_predicts');
Route::get('jam_areas', 'RequestController@jam_areas');
Route::get('jam_infos', 'RequestController@jam_infos');
Route::get('jam_predicts', 'RequestController@jam_predicts');
Route::get('locations', 'RequestController@locations');
Route::get('pop_jam_rates', 'RequestController@pop_jam_rates');
Route::get('tweets', 'RequestController@tweets');

Route::get('notice', 'NoticeController@notice');
