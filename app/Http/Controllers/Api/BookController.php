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
            ->with('authors')
            ->limit(10)
            ->get();

        return $books;
    }

    public function search(Request $request)
    {
        $search = $request->query('search');

        $books = Book::where('title', 'like', "%{$search}%")
            ->limit(5)
            ->get();

        return $books;
    }
}
