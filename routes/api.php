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

Route::post('/articles/create', 'ArticleController@store');
Route::get('/articles/edit/{id}', 'ArticleController@edit');
Route::post('/articles/update/{id}', 'ArticleController@update');
Route::delete('/articles/delete/{id}', 'ArticleController@delete');
Route::get('/articles', 'ArticleController@index');