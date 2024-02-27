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

    <ul id="latest-books"></ul>
    @vite('resources/js/latest-books.js')

    @foreach ($crime_books as $book)
        <div class="book">
            <p>{{ $book->title }}</p>
            <p>Authors: {{ $book->authors->pluck('name')->join(', ') }}</p>
            <hr>
        </div>
    @endforeach
@endsection