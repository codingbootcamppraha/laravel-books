<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function latest()
    {
        $books = Book::orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();

        return $books;
    }
}
