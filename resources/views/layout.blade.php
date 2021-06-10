        @include('includes.header')
        <main class="container tw-py-4 tw-max-w-full">
            @yield('content')
        </main>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
