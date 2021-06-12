<nav class="navbar navbar-expand-lg navbar-light  tw-shadow-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">PL_CMS</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?=Route::currentRouteName() == 'languages' ? 'active' : '';?>" 
                    href="{{url('/languages')}}">Languages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=Route::currentRouteName() == 'categories' ? 'active' : '';?>" 
                    href="{{url('/categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=Route::currentRouteName() == 'contents' ? 'active' : '';?>" 
                    href="{{url('/contents')}}">Contents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=Route::currentRouteName() == 'comments' ? 'active' : '';?>" 
                    href="{{url('/comments')}}">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=Route::currentRouteName() == 'news' ? 'active' : '';?>" 
                    href="{{url('/news')}}">News</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->userName }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
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
    </div>
</nav>