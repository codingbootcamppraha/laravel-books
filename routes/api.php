<?php

Route::get('/', [App\Http\Controllers\Api\TestController::class, 'index']);
Route::get('/books/latest', [App\Http\Controllers\Api\BookController::class, 'latest']);