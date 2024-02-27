@extends('layouts.main', [
    'current_page' => 'register'    
])

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf
        
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
    
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    
        <input type="password" name="password" value="" placeholder="Password">
    
        <input type="password" name="password_confirmation" value="" placeholder="Repeat password">
    
        <button>Register</button>
    </form>
@endsection