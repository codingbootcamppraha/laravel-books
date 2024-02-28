<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test/array', ['App\Http\Controllers\Api\TestController', 'arrayResponse']);
Route::get('test/model', ['App\Http\Controllers\Api\TestController', 'modelResponse']);
Route::get('test/collection', ['App\Http\Controllers\Api\TestController', 'collectionResponse']);

Route::get('books/latest', ['App\Http\Controllers\Api\BookController', 'latest']);
Route::get('books/search', ['App\Http\Controllers\Api\BookController', 'search']);

//      /api/users
Route::get('/users', [UserController::class, 'index']);