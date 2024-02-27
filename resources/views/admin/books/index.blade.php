@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.book.create') }}">Add new book</a>
    <ul class="books">
        @foreach ($books as $book)
            <li>
                {{ $book->title }}<br>
               
                <a href="{{ route('admin.book.edit', ['id' => $book->id]) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection