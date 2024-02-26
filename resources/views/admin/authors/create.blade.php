@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.author.store') }}" method="post">
        @csrf

        <input type="text" name="slug" placeholder="Slug *">
        <input type="text" name="name" placeholder="Name *">
        <input type="text" name="bio" placeholder="Bio">
        <button type="submit">Add author</button>
    </form>
@endsection