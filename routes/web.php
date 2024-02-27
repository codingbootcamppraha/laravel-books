<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ['App\Http\Controllers\HomepageController', 'index']);
Route::get('/book/{id}', ['App\Http\Controllers\BookController', 'show']);
Route::post('/book/{id}/review', ['App\Http\Controllers\BookController', 'review'])->middleware('auth');

Route::get('/about-us', function () {
    return view('about.about-us');
});
