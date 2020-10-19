<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
	<body>
			<header>
				@include('includes.header')
			</header>
					
			<main>
				@yield('content')
			</main>

			<footer>
				@include('includes.footer')
			</footer>

			<!-- MDB -->
			@yield('scriptJS')
			<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>
