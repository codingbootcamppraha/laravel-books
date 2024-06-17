<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.authors.index') }}">Authors list</a>
        <a href="{{ route('admin.books.index') }}">Books list</a>
    </nav>
    @yield('content')
</body>
</html>