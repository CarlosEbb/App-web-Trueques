<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('includes.head')
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-R7L94BZ12Q"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-R7L94BZ12Q');
		</script>
		 {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
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
		 <script src="{{asset('js/jquery-3.2.1.min.js')}}" crossorigin="anonymous"></script>
		 {{--<script src="{{asset('js/jquery.js')}}"></script> --}}
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/app.js')}}"></script>
         
		 <script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
				}
			}); 
	  
			function addFavoritos(producto_id) {
			var corazon = $('.addFavoritoCorazon_'+producto_id);
				$.ajax({
					url:'{{route("favoritos.store")}}',
		
					data:{'producto_id': producto_id},
					type:'post',
					success: function (response) {
						console.log('favorito',response);
						if(corazon.attr("fill") == 'red'){
						corazon.attr("fill", "#009fb7");
						}else{
						corazon.attr("fill", "red");
						}
						//window.location.href = "/favoritos";
					},
					statusCode: {
					404: function() {
						alert('web not found');
					}
					},
					error:function(x,xs,xt){
						//nos dara el error si es que hay alguno
						window.open(JSON.stringify(x));
						//alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
					}
				});
			}
		</script>

		<script>
			$(document).ready(function() {
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myDIV .blog-inner").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
			
			});

			$(document).ready(function() {
			$("#myInputWelcome").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myDIVWelcome .blog-inner").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
			
			});
		</script>

		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<script>
			var availableTags = [
				@foreach(\App\Models\Municipio::all() as $keywords)
				"{{ucwords(strtolower($keywords->nombre))}}",
				@endforeach
			];
		</script>

		<script>
			$( function() {
				$( "#myInput" ).autocomplete({
					source: availableTags
				});
			} );

			$( function() {
				$( "#myInputWelcome" ).autocomplete({
					source: availableTags
				});
			} );
		</script>
		
		<script>
			function enviar_formulario(){
				document.estadoFormulario.submit()
			}
			function enviar_formulario_publicado(){
				document.publicadoFormulario.submit()
			}

			function subirFoto(){
				$('#fileinput').trigger('click'); 
			}

			$(document).ready(function() {
				$("#fileinput").on("change", function() {
					document.fotoformulario.submit();
				});
			});
			
		</script>

		<script>



////////////
@foreach(\App\Models\Departamento::all() as $departamento)

var p2rovincias_{{$departamento->id}}=new Array(
  @foreach($departamento->municipio as $municipio)
  "{{ucwords(strtolower($municipio->nombre))}}",
  @endforeach
  )   
@endforeach


var todas2Provincias = [
[],
@foreach(\App\Models\Departamento::all() as $departamento)
    p2rovincias_{{$departamento->id}},
@endforeach

];

var todas2ProvinciasID = [
[],
@foreach(\App\Models\Departamento::all() as $departamentoID)
  new Array(
    @foreach($departamentoID->municipio as $municipioID)
        {{$municipioID->id}},
    @endforeach
  ),
@endforeach

];


function cambia2_provincia(){ 
 //tomo el valor del select del departamento elegido 
 var departamento 
 departamento = document.f2.departamento2[document.f2.departamento2.selectedIndex].value 
 //miro a ver si el departamento está definido 
 if (departamento != 0) { 
    //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
    //selecciono el array de provincia adecuado 
    mis_provincias=todas2Provincias[departamento] 
    mis_provinciasID=todas2ProvinciasID[departamento] 
    //calculo el numero de provincias 
    num_provincias = mis_provincias.length 
    //marco el número de provincias en el select 
    document.f2.municipio2.length = num_provincias 
    //para cada provincia del array, la introduzco en el select 
    for(i=0;i<num_provincias;i++){ 
       document.f2.municipio2.options[i].value=mis_provinciasID[i] 
       document.f2.municipio2.options[i].text=mis_provincias[i] 
    }	
 }else{ 
    //si no había provincia seleccionada, elimino las provincias del select 
    document.f2.municipio2.length = 1 
    //coloco un guión en la única opción que he dejado 
    document.f2.municipio2.options[0].value = "-" 
    document.f2.municipio2.options[0].text = "-" 
 } 
 //marco como seleccionada la opción primera de provincia 
 document.f2.municipio2.options[0].selected = true 
}

cambia2_provincia(1);
		</script>
		@yield('scriptJS')
	</body>
</html>
