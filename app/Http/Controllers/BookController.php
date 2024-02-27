<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Auth;

class BookController extends Controller
{
    public function show($id)
    {
        $book = Book::with('reviews')
            ->findOrFail($id);

        return view('books.show', compact('book'));
    }

    public function review(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required|max:255'
        ]);

        $user = Auth::user();
        $book = Book::findOrFail($id);

        $review = new Review;
        $review->user_id = $user->id;
        $review->book_id = $book->id;
        $review->text = $request->input('text');
        $review->save();

        return redirect()->back();
    }
}
