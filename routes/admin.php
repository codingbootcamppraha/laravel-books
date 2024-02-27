<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('admin/authors', ['App\Http\Controllers\Admin\AuthorController', 'index'])->name('admin.author.index');
Route::get('admin/authors/create', ['App\Http\Controllers\Admin\AuthorController', 'create'])->name('admin.author.create');
Route::post('admin/authors/store', ['App\Http\Controllers\Admin\AuthorController', 'store'])->name('admin.author.store');

Route::get('admin/books', ['App\Http\Controllers\Admin\BookController', 'index'])->name('admin.book.index');
Route::get('admin/books/create', ['App\Http\Controllers\Admin\BookController', 'edit'])->name('admin.book.create');
Route::get('admin/books/edit/{id}', ['App\Http\Controllers\Admin\BookController', 'edit'])->name('admin.book.edit');
Route::post('admin/books/store', ['App\Http\Controllers\Admin\BookController', 'store'])->name('admin.book.store');
Route::put('admin/books/update/{id?}', ['App\Http\Controllers\Admin\BookController', 'store'])->name('admin.book.update');