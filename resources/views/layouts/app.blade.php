<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('includes.head')
	</head>
	<body>
		<header>
			@include('includes.header')
			@yield('scriptCSS')
		</header>
				
		<main>
			@yield('content')
		</main>

		<footer>
			@include('includes.footer')
		</footer>

		<!-- script -->
		<script src="{{asset('js/jquery.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/app.js')}}"></script>
		@yield('scriptJS')
	</body>
</html>
