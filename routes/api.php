<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Api\TestController::class, 'index']);
Route::get('/books/latest', [App\Http\Controllers\Api\BookController::class, 'latest']);
Route::get('/books/search', [App\Http\Controllers\Api\BookController::class, 'search']);