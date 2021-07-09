@extends('layouts.main', ['title' => 'List of bookshops','current_menu_item' => 'bookshops'])

@section('content')

<h1>{{ $bookshop->name }}</h1>

<h3>Available books</h3>
    <ul>
        @foreach($bookshop->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@endsection
