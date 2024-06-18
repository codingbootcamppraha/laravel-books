<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show($book_id)
    {
        $book = Book::with('reviews')
            ->findOrFail($book_id);
        
        return view('book.show', compact('book'));
    }
}
