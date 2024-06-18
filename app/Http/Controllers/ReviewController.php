<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;

class ReviewController extends Controller
{
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $book = Book::findOrFail($book_id);

        $review = new Review;
        $review->user_id = auth()->id();
        $review->book_id = $book_id;
        $review->text = $request->input('text');
        $review->save();

        return redirect()->back();
    }
}
