<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    /**
     * show the form to create a new bookshop
     */
    public function create()
    {
        return view('bookshop.create');
    }

    /**
     * handles the submission of the form shown in create
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        $city = $request->input('city');

        // $is_open = $request->input('is_open', 'yes');

        $bookshop = new Bookshop;
        $bookshop->name = $name;
        $bookshop->city = $city;
        // insert the object into database
        $bookshop->save();

        return redirect()->action('BookshopController@index');
    }

    /**
     * list of bookshops
     */
    public function index()
    {
        $bookshops = Bookshop::orderBy('name')->get();

        return view('bookshop.index', compact('bookshops'));
    }


    public function show($id){
        $bookshop = Bookshop::findOrFail($id);
        return view('bookshop.show', compact('bookshop'));
    }
}
