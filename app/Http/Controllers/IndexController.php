<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $crime_books = Book::where('category_id', 12)
            ->orderBy('publication_date', 'desc')
            // ->with('authors')
            // ->with('authors.publishers')
            ->limit(10)
            ->get();

        $crime_books->load('authors');

        return view('index.index', compact('crime_books'));
    }
}
