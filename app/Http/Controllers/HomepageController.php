<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Auth;

class HomepageController extends Controller
{
    public function index()
    {
        // $user = auth()->user(); // IT IS SAME!
        // $user = Auth::user();

        // if (!$user) {
        //     dd('no user loggedin');
        // }

        // dd('dd from controller', $user);
        $crime_books = Book::where('category_id', 12)
        ->orderBy('publication_date', 'desc')
        ->with('authors')
        ->limit(10)
        ->get();

        return view('index.index', compact('crime_books'));
    }
}
