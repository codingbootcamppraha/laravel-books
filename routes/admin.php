<?php

use Illuminate\Support\Facades\Route;


Route::get('/authors', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors/store', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('authors.store');

Route::get('/books', [App\Http\Controllers\Admin\BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [App\Http\Controllers\Admin\BookController::class, 'create'])->name('books.create');
Route::get('/books/edit/{id}', [App\Http\Controllers\Admin\BookController::class, 'create'])->name('books.edit');
Route::post('/books/store', [App\Http\Controllers\Admin\BookController::class, 'store'])->name('books.store');
Route::put('/books/store/{id}', [App\Http\Controllers\Admin\BookController::class, 'store'])->name('books.update');

