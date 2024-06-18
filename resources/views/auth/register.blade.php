@extends('layouts.main', [
    'current_page' => 'register'   
])

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Register</h1>
<form action="{{ route('register') }}" method="post">
 
    @csrf
 
    <input type="text" name="name" value="{{ old('name') }}">
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <input type="password" name="password_confirmation" value="">
 
    <button>Register</button>
 
</form>

@endsection