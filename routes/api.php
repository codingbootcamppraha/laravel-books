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

//      /api/books
Route::get('/books', 'APIBookController@index');
//      /api/books/{id}
Route::get('/books/{id}', 'APIBookController@show');

//      /api/book/1
//      /api/book/2
//      /api/book/1231515
//      /api/book/whatever
Route::get('/book/{book_id}', 'APIBookController@detail');
Route::post('/book/{book_id}/review', 'APIBookController@storeReview');
