{{$active=false}}
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <div class="dropdown">
                <button class="dropdown-toggle tw-font-bold tw-text-xl tw-mx-2 tw-bg-opacity-100 nav-link
                                <?=$active == true ? 'active' : '';?>" 
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="nav-link  <?=Route::currentRouteName() == 'newsCategory' ? $active = true : '';?>" 
                        href="{{route('newsCategory')}}">Category</a>
                    <a class="nav-link <?=Route::currentRouteName() == 'newsContent' ? $active = true : '';?>" 
                        href="{{route('newsContent')}}">Content</a>
                    <a class="nav-link <?=Route::currentRouteName() == 'newsComment' ? $active = true : '';?>" 
                        href="{{route('newsComment')}}">Comment</a>
                </div>
            </div>
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