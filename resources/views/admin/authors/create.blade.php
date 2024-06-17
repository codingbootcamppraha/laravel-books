@extends('layouts.admin')

@section('content')
<h1>Add an auhtor</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('admin.authors.store') }}" method="post">
    @csrf

    <label>
        Author full name: <br>
        <input type="text" name="name" value="{{ old('name') }}">
    </label><br>
    <label>
        Author slug: <br>
        <input type="text" name="slug" value="{{ old('slug') }}">
    </label><br>
    <label>
        Author bio: <br>
        <textarea name="bio">{{ old('bio') }}</textarea>
    </label><br>
    <button>Submit new author</button>
</form>
@endsection