<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/style_users.scss')
</head>
<body>
    <nav>
        Administration:
        <a href="{{ route('admin.authors.index') }}">Authors list</a>
        <a href="{{ route('admin.books.index') }}">Books list</a>
    </nav>
    @yield('content')

    @viteReactRefresh
    @vite('resources/js/users/main.jsx')
</body>
</html>