<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="This is an example of a meta description.">

{{-- Logo pestaña --}}
<link rel="shortcut icon" href="{{asset('img/Logo.png')}}"> 

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
{{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

<!-- MDB -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
