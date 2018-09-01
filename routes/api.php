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

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'articles','middleware'=>'auth:api'], function () {
    Route::get('/', 'ArticleController@index');
    Route::get('/{article}', 'ArticleController@show');
    Route::post('/', 'ArticleController@store');
    Route::put('/{article}', 'ArticleController@update');
    Route::delete('/{article}', 'ArticleController@destroy');
});
