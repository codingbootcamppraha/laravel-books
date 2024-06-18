@extends('layouts.main', [
    'current_page' => 'index'   
])

@section('content')
    <h1>Bookstore</h1>
    <p>We are the best online bookstore ever...</p>

    <div id="latest-books"></div>
    @vite('resources/js/latest-books.js')

@endsection