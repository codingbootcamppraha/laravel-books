@extends('layouts.main', [
    'current_page' => 'home'    
])

@section('content')
    <h1>Book: {{ $book->title }} by {{ $book->authors->pluck('name')->join(', ') }}</h1>

    <h2>Description</h2>
    <p>{{ $book->title }}</p>
    <img src="{{ $book->image }}" alt="book image">

    <h2>Reviews:</h2>
    @foreach ($book->reviews as $review)
        <div class="review">
            <p>{{ $review->user->name }} at {{ $review->created_at }}</p>
            <p>{{ $review->text }}</p>
        </div>
    @endforeach

    @auth 
        <h2>Submit a review:</h2>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/book/{{ $book->id }}/review" method="post">
            @csrf
            <input type="text" name="text">
            <button type="submit">Submit the review</button>

        </form>
    @endauth
@endsection