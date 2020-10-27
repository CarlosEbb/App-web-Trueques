@extends('layouts.app')

@section('content')

<form action="subir" class="dropzone" id="my-awesome-dropzone" method="get" enctype="multipart/form-data">@csrf
	
</form>

@endsection


@section('scriptCSS')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

@endsection

@section('scriptJS')

<script>
	Dropzone.options.myAwesomeDropzone = {
		paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
		maxFilesize: 10 // Tamaño máximo en MB
		
	};

};
</script>

@endsection