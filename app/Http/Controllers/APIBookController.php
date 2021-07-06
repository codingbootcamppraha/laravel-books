<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Review;

class APIBookController extends Controller
{
    public function index()
    {
        // select books from the database
        // SELECT * FROM `books` ORDER BY `title`
        //     FROM `books`             SELECT *
        $books = Book::orderBy('title')->get();

        // return the collection object as JSON
        return $books;
    }

    public function show($book_id)
    {
        // find a book by its id
        // SELECT * FROM `books` WHERE `id` = $book_id
        $book = Book::findOrFail($book_id);

        // return the Eloquent object as JSON
        return $book;
    }

    public function detail($id_of_a_book)
    {
        // get the book from the database by its id column
        $book = Book::findOrFail($id_of_a_book);

        // return a JSON with the book's data
        return $book;
    }

    public function storeReview(Request $request, $book_id)
    {
        $this->validate($request, [
            'rating' => 'min:0|max:10|numeric',
            'text' => 'required'
        ]);

        $rating = $request->input('rating');
        $text = $request->input('text');

        // find a book by its id, fail with 404 if the book is not found
        $book = Book::findOrFail($book_id);

        // create a review for the book
        $review = new Review;
        $review->book_id = $book->id;
        $review->user_id = auth()->user()->id;
        $review->text = $text;
        $review->rating = $rating;
        $review->save();

        // return success message
        return [
            'status' => 'success'
        ];
    }
}