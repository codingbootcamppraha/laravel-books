<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\Review;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:255',
            'authors' => 'required|min:3|max:255',
            'image' => 'required|min:3|max:255'
        ]);

        $book = Book::create($request->all());

//        $book = new Book;
//        $book->title = $request->input('title');
//        $book->authors = $request->input('authors');
//        $book->image = $request->input('image');
//        $book->save();


        return redirect(action('BookController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:255',
            'authors' => 'required|min:3|max:255',
            'image' => 'required|min:3|max:255'
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

//        $book->title = $request->input('title');
//        $book->authors = $request->input('authors');
//        $book->image = $request->input('image');
//        $book->save();

        return redirect(action('BookController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect(action('BookController@index'));
    }


    public function storeReview($book_id, Request $request){

        $data = $request->all();

        $data['book_id'] = $book_id;

        Review::create($data);

        return redirect(action('BookController@show', $book_id));
    }

    public function deleteReview(Request $request){
        $id = $request->input('review_id');

        Review::find($id)->delete();

        return 'success';
//        return $request->all();
    }
}
