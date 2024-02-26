@extends('layouts.home', [
    'current_url' => '/'
])

@section('main-content')
    <h1>THIS IS VIEW THAT EXTENDS HOME LAYOUT</h1>

    @include('subview')
    
    @component('components.alert')
        <h2>THIS IS PLACES IN THE $SLOT</h2>
    @endcomponent
@endsection