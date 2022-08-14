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

Route::prefix('/items')->group(function(){
    Route::get('','ItemsController@index');
    Route::post('/store','ItemsController@store');
    Route::put('/{id}' , 'ItemsController@update');
    Route::delete('/{id}', 'ItemsController@destroy');
});
