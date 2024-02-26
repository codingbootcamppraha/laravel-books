<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::get();

        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required',
            'slug' => 'required'
        ]);

        $author = new Author;
        $author->name = $request->input('name');
        $author->slug = $request->input('slug');
        $author->bio = $request->input('bio');
        $author->save();

        return redirect()->route('admin.author.index');
    }
}
