<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.index') }}">Home</a>
        <a href="{{ route('admin.author.index') }}">Authors list</a>
    </nav>
    <h1>Admin</h1>

    @yield('content')
</body>
</html>