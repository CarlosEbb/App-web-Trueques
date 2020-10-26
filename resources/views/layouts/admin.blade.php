<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
	</head>
	<body style="overflow-y: hidden;">
    <div class="wrapper">
      @if(Auth::user()->rol_id == 1)
      <!-- Sidebar -->
      @include('includes.sidebar-admin')        

      <!-- Page Content -->
      @include('includes.navbar-admin')

      <div id="content">
        @yield('content')
      </div>

      <!-- Dark Overlay element -->
      <div class="overlay"></div>
      @else
        <script>window.location.href = "/";</script>
      @endif
    </div>

		<!-- script -->
		
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    {{-- <script src="{{asset('js/jquery.js')}}" type="javascript"></script> --}}
    {{-- <script src="{{asset('js/bootstrap.min.js')}}" type="javascript"></script> --}}
    <script src="{{asset('js/dashboard-admin.js')}}" type="javascript"></script>
    <script src="{{asset('js/app.js')}}" type="javascript"></script>
		@yield('scriptJS')
	</body>
</html>