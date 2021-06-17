@extends('layouts.main', ['title' => 'List of bookshops','current_menu_item' => 'bookshops'])

@section('content')

<h1>{{ $bookshop->name }}</h1>

<h3>Available books</h3>
    <ul>
        <li>Hp</li>
        <li>Lotr</li>
    </ul>
@endsection
