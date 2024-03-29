<?php

use Illuminate\Http\Request;

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
Route::get('events','EventController@index');

Route::get('events/{event}','EventController@show');
Route::POST('events/','EventController@store');

Route::delete('events/delete/{event}','EventController@delete');
Route::POST('events/update/{event}','EventController@update');