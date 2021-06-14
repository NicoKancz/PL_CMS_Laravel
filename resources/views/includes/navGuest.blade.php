<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'news' ? 'active' : '';?> tw-font-bold tw-text-xl" 
                href="{{url('/news')}}">News</a>
        </li>
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @if (Route::has('login'))
            <li class="nav-item tw-font-bold tw-text-xl">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item tw-font-bold tw-text-xl">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
        @endif
    </ul>
</div>