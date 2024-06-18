<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class TestController extends Controller
{
    public function index()
    {
        $book = Book::find(11206);

        $books = Book::where('title', 'like', '%harry potter%')->get();

        // return [
        //     'The Shawshank redemption',
        //     'The Godfather',
        //     'The Godfather II',
        //     'Dark Knight', 
        //     '12 angry men', 
        //     'Schindler\'s list',
        //     'Pulp fiction',
        //     'Lord of the Rings: Return of the King',
        //     'The good, the bad and the ugly',
        //     'Fight club'
        // ];

        // return $book;

        return $books;

        // return [
        //     'status' => 'success',
        //     'message' => '',
        //     'data' => $books
        // ];
    }
}
