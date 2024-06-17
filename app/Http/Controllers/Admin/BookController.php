<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::limit(15)
            ->get();

        return view('admin.books.index', compact('books'));
    }

    public function create($id = null)
    {
        $categories = Category::get();

        if ($id) {
            $book = Book::findOrFail($id);
        } else {
            $book = new Book;
        }

        return view('admin.books.create', compact('categories', 'book'));
    }

    public function store(Request $request, $id = null)
    {
        if ($id) {
            $request->validate([
                'slug' => 'required'
            ]);

            $book = Book::findOrFail($id);
        } else {
            $request->validate([
                'slug' => 'required|unique:books',
                'isbn' => 'unique:books'
            ]);

            $book = new Book;
        }

        $book->slug = $request->input('slug');
        $book->title = $request->input('title');
        $book->category_id = $request->input('category_id');
        $book->price = $request->input('price');
        $book->image = $request->input('image');
        $book->publication_date = $request->input('publication_date');
        $book->language = $request->input('language');
        $book->isbn = $request->input('isbn');
        $book->format = $request->input('format');
        $book->edition = $request->input('edition');
        $book->pages = $request->input('pages');
        $book->description = $request->input('description');
        $book->save();

        if ($id) {
            session()->flash('success_message', 'Book has been updated!');
        } else {
            session()->flash('success_message', 'Book has been created!');
        }

        return redirect()->route('admin.books.index');
    }
}
