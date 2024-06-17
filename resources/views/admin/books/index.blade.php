@extends('layouts.admin')

@section('content')
@if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
@endif
<h1>Books list</h1>
<a href="{{ route('admin.books.create') }}">+ Add a book</a>
<ul class="books-list">
    @foreach ($books as $book)
        <li> 
            <a href="{{ route('admin.books.edit', $book->id) }}">{{ $book->title }}</a>
        </li>
    @endforeach
</ul>    
@endsection