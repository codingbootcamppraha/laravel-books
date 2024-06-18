@extends('layouts.main', [
    'current_page' => 'login'   
])

@section('content')
<h1>Login</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('login') }}" method="post">
 
    @csrf
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <button>Login</button>
 
</form>
@endsection