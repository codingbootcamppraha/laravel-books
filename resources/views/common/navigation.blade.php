<nav>
    <a href="{{ route('home') }}" class="{{ $current_page == 'index' ? 'current_page' : '' }}">Home</a>
    <a href="{{ route('about-us') }}" class="{{ $current_page == 'about-us' ? 'current_page' : '' }}">About</a>
    
{{--
    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
        <form action="{{ route('logout') }}" method="post">
    
            @csrf
        
            <button>Logout</button>
        
        </form>
    @endauth
--}}

    @if (auth()->user())
        <form action="{{ route('logout') }}" method="post">
        
            @csrf

            <button>Logout</button>

        </form>
    @else 
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endif


    {{--      auth()->user() same as Auth::user()     --}}

</nav>