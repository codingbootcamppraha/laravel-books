@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.author.create') }}">Add new author</a>
    <ul class="authors">
        @foreach ($authors as $author)
            <li>
                {{ $author->name }}
            </li>
        @endforeach
    </ul>
@endsection