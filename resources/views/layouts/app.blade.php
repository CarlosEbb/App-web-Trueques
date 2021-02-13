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
		@yield('scriptJS')
	</body>
</html>
