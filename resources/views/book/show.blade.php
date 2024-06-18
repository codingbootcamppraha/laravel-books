@extends('layouts.main', [
    'current_page' => 'book'   
])

@section('content')
    <h1>{{ $book->title }}</h1>
    <h2>by {{ $book->authors->pluck('name')->join(', ') }}</h2>

    <img src="{{ $book->image }}" alt="Book cover">

    <p>Price: {{ $book->price }} EUR</p>

    {{-- If you want to convert string into html code use this syntax: --}}
    <p>{!! $book->description !!}</p>

    <h2>Reviews:</h2>
    <div class="book-reviews">
        @if (count($book->reviews) > 0)
            @foreach ($book->reviews as $review)
                <div class="book-reviews__review">
                    <p>{{ $review->user->name }} at {{ $review->created_at }}:</p>
                    <p>{{ $review->text }}</p>
                </div>
            @endforeach
        @else
            No reviews yet
        @endif
    </div>

    @auth
        <h2>Submit a review:</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('book.review.store', $book->id) }}" method="post">
            @csrf
            <textarea name="text"></textarea><br>
            <button type="submit">Submit</button>
        </form>
    @endauth
@endsection