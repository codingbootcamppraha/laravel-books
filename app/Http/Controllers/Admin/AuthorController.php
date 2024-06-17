<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::limit(15)
            ->get();

        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        
    }
}
