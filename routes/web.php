<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');