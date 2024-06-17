<?php

use Illuminate\Support\Facades\Route;


Route::get('/authors', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('authors.index');