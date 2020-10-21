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
			<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
			<script src="{{asset('js/app.js')}}"></script>
			@yield('scriptJS')
	</body>
</html>
