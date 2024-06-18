@extends('layouts.main', [
    'current_page' => 'index'   
])

@section('content')
    <div class="intro">
        <h1>Bookstore</h1>
        <p>We are the best online bookstore ever...</p>
    </div>

    <h2>Our latest books:</h2>
    <div id="latest-books" class="latest-books"></div>
    @vite('resources/js/latest-books.js')

    <div>
        <h2>Crime books:</h2>
        <div class="books-list">
            @foreach ($crime_books as $book)
                <div class="books-list__book">
                    <img src="{{ $book->image }}" alt="Book cover">
                    <p>{{ $book->title }}</p>
                    <p> by {{ $book->authors->pluck('name')->join(', ') }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection