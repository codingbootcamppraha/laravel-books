<nav>
    <a href="{{ route('home') }}" class="{{ $current_page == 'index' ? 'current_page' : '' }}">Home</a>
    <a href="{{ route('about-us') }}" class="{{ $current_page == 'about-us' ? 'current_page' : '' }}">About</a>
</nav>