@extends('layouts.app')

@section('content')

{{-- Mostrar Mapa --}}
<button onclick="findMe()">Mostrar ubicación</button>
	<div id="map"></div>

@endsection


@section('scriptJS')


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsUteik7kEACjz1mrDGTuKUr75TbLVNeM"></script>
	<script>
		function findMe(){
			var output = document.getElementById('map');

			// Verificar si soporta geolocalizacion
			if (navigator.geolocation) {
				output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
			}else{
				output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
			}

			//Obtenemos latitud y longitud
			function localizacion(posicion){

				var latitude = posicion.coords.latitude;
				var longitude = posicion.coords.longitude;
                console.log(latitude, longitude);
				var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=600x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyBsUteik7kEACjz1mrDGTuKUr75TbLVNeM";

				output.innerHTML ="<img src='"+imgURL+"'>";

				

			}

			function error(){
				output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

			}

			navigator.geolocation.getCurrentPosition(localizacion,error);

		}
        </script>


@endsection