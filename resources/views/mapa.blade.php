@extends('layouts.app')

@section('content')

<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsUteik7kEACjz1mrDGTuKUr75TbLVNeM&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>


@endsection


@section('scriptJS')

<script>

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

</script>


@endsection