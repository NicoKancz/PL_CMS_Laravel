<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        @if (Auth::user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'languages' ? 'active' : '';?> tw-font-bold tw-text-xl" 
            href="{{url('/languages')}}">Languages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'categories' ? 'active' : '';?> tw-font-bold tw-text-xl" 
            href="{{url('/categories')}}">Categories</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'contents' ? 'active' : '';?> tw-font-bold tw-text-xl" 
            href="{{url('/contents')}}">Contents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'comments' ? 'active' : '';?> tw-font-bold tw-text-xl" 
            href="{{url('/comments')}}">Comments</a>
        </li>
        @if (Auth::user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link <?=Route::currentRouteName() == 'users' ? 'active' : '';?> tw-font-bold tw-text-xl" 
            href="{{url('/users')}}">Users</a>
        </li>
        @endif
        <li class="nav-item">
            <div class="dropdown">
                <button class="dropdown-toggle tw-font-bold tw-text-xl tw-bg-opacity-100
                                nav-link <?=Route::currentRouteName() == 'newsContent' ? 'active' : '';?>" 
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="nav-link tw-text-center hover:tw-bg-blue-400" 
                        href="{{route('newsCategory')}}">Category</a><hr>
                    <a class="nav-link tw-text-center hover:tw-bg-blue-400" 
                        href="{{url('/news/content')}}">Content</a><hr>
                    <a class="nav-link tw-text-center hover:tw-bg-blue-400" 
                        href="{{route('newsComment')}}">Comment</a>
                </div>
            </div>
        </li>
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle tw-font-bold" 
                href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->userName }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item tw-font-bold tw-text-xl" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</div>
