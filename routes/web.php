<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
Route::get('/book/{book_id}', [App\Http\Controllers\BookController::class, 'show'])->name('book.show');
Route::post('/book/{book_id}/review', [App\Http\Controllers\ReviewController::class, 'store'])->name('book.review.store');