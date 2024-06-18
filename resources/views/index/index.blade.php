@extends('layouts.main', [
    'current_page' => 'index'   
])

@section('content')
    <h1>Bookstore</h1>
    <p>We are the best online bookstore ever...</p>

    <div id="latest-books"></div>
    @vite('resources/js/latest-books.js')

    <div>
        <h2>Crime books:</h2>
        @foreach ($crime_books as $book)
            <div class="book">
                <p>{{ $book->title }}</p>
                <p> by 
                    @foreach ($book->authors as $author)
                        {{ $author->name }}
                    @endforeach
                </p>
            </div>
        @endforeach
    </div>

@endsection