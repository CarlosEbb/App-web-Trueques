<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
        
    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>
</html>
