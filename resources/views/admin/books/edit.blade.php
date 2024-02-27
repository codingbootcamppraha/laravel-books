@extends('layouts.admin')

@section('content')
    @if ($book->id)
        <h2>Edit book #{{ $book->id }}</h2>
    @else 
        <h2>Add new book</h2>
    @endif

    @if (Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($book->id)
        <form action="{{ route('admin.book.update', ['id' => $book->id]) }}" method="post">
            @method('PUT')
    @else 
        <form action="{{ route('admin.book.store') }}" method="post">
    @endif

        @csrf
        <input type="text" name="slug" placeholder="Slug*" value="{{ old('slug', $book->slug) }}">
        <input type="text" name="title" placeholder="Title" value="{{ old('title', $book->title) }}">
        <select name="category_id" id="categories">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="text" name="price" placeholder="Price" value="{{ old('price', $book->price) }}">
        
        <button type="submit">Save</button>
    </form>
@endsection