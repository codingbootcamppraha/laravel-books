@extends('layouts.admin')

@section('content')
<ul class="authors-list">
    @foreach ($authors as $author)
        <li>{{ $author->name }}</li>
    @endforeach
</ul>    
@endsection