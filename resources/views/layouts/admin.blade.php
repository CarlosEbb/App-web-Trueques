<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
	</head>
	<body style="overflow-y: hidden;">
    <div class="wrapper">
      <!-- Sidebar -->
      @include('includes.sidebar-admin')        

      <!-- Page Content -->
      @include('includes.navbar-admin')

      <div id="content">
        @yield('content')
      </div>

      <!-- Dark Overlay element -->
      <div class="overlay"></div>
    </div>

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/dashboard-admin.js')}}" type="javascript"></script>
    <script src="{{asset('js/app.js')}}" type="javascript"></script>
		@yield('scriptJS')
	</body>
</html>