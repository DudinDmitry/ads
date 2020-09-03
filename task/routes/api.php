<?php

use Illuminate\Http\Request;
use App\Document;

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
Route::get('/v1/document/{id}','DocumentController@show');
Route::post('/v1/document','DocumentController@store');
Route::put('/v1/document/{document}','DocumentController@update');
