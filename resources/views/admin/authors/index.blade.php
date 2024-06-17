@extends('layouts.admin')

@section('content')
@if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
@endif
<h1>Authors list</h1>
<a href="{{ route('admin.authors.create') }}">+ Add an author</a>
<ul class="authors-list">
    @foreach ($authors as $author)
        <li>{{ $author->name }}</li>
    @endforeach
</ul>    
@endsection