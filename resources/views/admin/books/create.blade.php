@extends('layouts.admin')

@section('content')

@if ($book->id)
    <h1>Edit book #{{ $book->id }}</h1>
@else
    <h1>Add a book</h1>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($book->id)
    <form action="{{ route('admin.books.update', $book->id) }}" method="post">
        @method('put')
@else
    <form action="{{ route('admin.books.store') }}" method="post">
@endif

    @csrf
    <label>
        Title: <br>
        <input type="text" name="title" value="{{ old('title', $book->title) }}">
    </label><br>

    <label>
        Slug: <br>
        <input type="text" name="slug" value="{{ old('slug', $book->slug) }}">
    </label><br>

    <label>
        Category: <br>
        <select name="category_id">
            <option value="">Select an option</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </label><br>

    <label>
        Price: <br>
        <input type="number" name="price" step="0.01" value="{{ old('price', $book->price) }}">
    </label><br>

    <label>
        Image URL: <br>
        <input type="text" name="image" value="{{ old('image', $book->image) }}">
    </label><br>

    <label>
        Publication date: <br>
        <input type="date" name="publication_date" value="{{ old('publication_date', $book->publication_date) }}">
    </label><br>

    <label>
        Language: <br>
        <input type="text" name="language" value="{{ old('language', $book->language) }}">
    </label><br>

    <label>
        ISBN: <br>
        <input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}">
    </label><br>

    <label>
        Format: <br>
        <input type="text" name="format" value="{{ old('format', $book->format) }}">
    </label><br>

    <label>
        Edition: <br>
        <input type="text" name="edition" value="{{ old('edition', $book->edition) }}">
    </label><br>

    <label>
        Pages: <br>
        <input type="number" name="pages" value="{{ old('pages', $book->pages) }}">
    </label><br>

    <label>
        Description: <br>
        <textarea name="description">{{ old('description', $book->description) }}</textarea>
    </label><br>
    
    <button>Submit new book</button>
</form>

@endsection