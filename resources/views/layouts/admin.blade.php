<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
	</head>
	<body>
    <div class="wrapper">
      @if(Auth::user()->rol_id == 1)
        <!-- Sidebar -->
        @include('includes.sidebar-admin')        

        <!-- Page Content -->
        <div id="content">
          @include('includes.navbar-admin')
          <div class="content-dashboar">
            <div class="container p-0">
              @yield('content')
            </div>
          </div>
        </div>
      @else
        <script>window.location.href = "/";</script>
      @endif
    </div>

		<!-- script -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/dashboard-admin.js')}}"></script>
		@yield('scriptJS')
	</body>
</html>