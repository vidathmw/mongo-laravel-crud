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

//List articles
Route::get('books', 'BookController@index');

//list single article
Route::get('book/{id}', 'BookController@show');

//new article
Route::post('book', 'BookController@store');

//update articles
Route::put('book', 'BookController@store');

//delete articles
Route::delete('book/{id}', 'BookController@destroy');