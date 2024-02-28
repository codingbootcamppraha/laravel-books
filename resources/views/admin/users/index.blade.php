@extends('layouts.admin')

@section('content')

{{-- react application will be rendered in here: --}}
<div id="root"></div>

@viteReactRefresh
@vite('resources/js/user-list/main.jsx')


@endsection