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
