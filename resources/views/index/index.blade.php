@extends('layouts.main', [
    'current_page' => 'home'
])

@section('content')
    <h1>WELCOME

    @auth
        {{ auth()->user()->name }}
    @endauth

    TO OUR BOOKS ARCHIVE</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptates nesciunt voluptatem quod maxime. Omnis veritatis maiores sunt commodi quasi tempora, animi, libero quos ab, suscipit minima quod praesentium quo?</p>

    @include('common.search')

    <div id="latest-books"></div>
    @vite('resources/js/latest-books.js')

    @cannot('role', 'peasant')
        @foreach ($crime_books as $book)
            <h2>Featured crime books of the month:</h2>
            <div class="book">
                <p>{{ $book->title }}</p>
                <p>Authors: {{ $book->authors->pluck('name')->join(', ') }}</p>
                <a href="/book/{{ $book->id }}">See details</a>
                <hr>
            </div>
        @endforeach
    @endcannot
@endsection