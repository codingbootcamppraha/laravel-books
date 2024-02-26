<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/common.scss')
</head>
<body>
    @include('common.navigation', [
        'current_page' => $current_page
    ])
    @yield('content')
</body>
</html>