<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/common.scss')
</head>
<body>
    <nav>
        <a href="/" class="{{ $current_url == '/' ? 'some_class' : '' }}">Home</a>
        <a href="#">About</a>
    </nav>

    @yield('main-content')
    
    @yield('lower-content')


</body>
</html>