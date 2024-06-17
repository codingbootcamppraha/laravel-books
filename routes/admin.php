<?php

use Illuminate\Support\Facades\Route;


Route::get('/authors', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors/store', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('authors.store');