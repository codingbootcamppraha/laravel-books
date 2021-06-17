@extends('layouts.main', ['title' => $book->title])

@section('content')
    <h2>{{ $book->title }}</h2>
    <a href="{{ action('BookController@index') }}">Back to index of books</a>
    <img src="{{ $book->image }}" alt="{{ $book->title }}">
    <h3>{{ $book->title }}</h3>
    <p>{{ $book->authors }}</p>

    @if($book->publisher)
        <p>Published by: {{ $book->publisher->title }}</p>
    @endif

    <p>
        <a href="{{ action('BookController@edit', [$book->id]) }}">Edit</a>
        <form method="post" action="{{ action('BookController@destroy', [$book->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>

    <h3>Order</h3>

{{--    @if(Auth::check())--}}
        <form method="post" action="{{ action('OrderController@store', $book->id) }}">
            @csrf

            {{-- <input type="hidden" name="book_id" value="{{ $book->id }}"> --}}

            {{-- Don't to this: --}}
            {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}

            <input type="number" min="0" step="1" name="quantity">
            <input type="submit" value="Submit">
        </form>
    {{--    @else--}}
    {{--        You need to <a href="{{ route('login') }}">login</a> first!--}}
    {{--    @endif--}}

    <h3>Reviews</h3>

{{--    @if(Auth::check())--}}
    @auth
        <form method="post" action="{{ action('BookController@storeReview', $book->id) }}">
            @csrf
            <textarea name="text" cols="30" rows="10"></textarea>

            {{-- <input type="hidden" name="book_id" value="{{ $book->id }}"> --}}
            <input type="number" min="0" max="10" step="1" name="rating">
            <input type="submit" value="Submit">
        </form>
    @else
        <p>You are not logged in!</p>
    @endauth
{{--    @endif--}}

    @foreach($book->reviews as $review)
        <p>
            {{ $review->text }}

            @can('admin')
                <form method="post" action="{{ action('BookController@deleteReview') }}">
                    @csrf
                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                    <input type="Submit" value="Delete">
                </form>
            @endcan
        </p>
    @endforeach

@endsection
