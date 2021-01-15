@extends('layouts.app')

@section('content')
  <div class="container px-0 px-md-5">
    <div class="row px-3 px-md-5">
      <div class="col-12 text-center mt-5">
        <h2 class="text-uppercase">seleccionar</h2>
      </div>
      <div class="col-12">
        @foreach ( $errors->all() as $error)
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{$error}}
          </div>
        @endforeach

        @if(Session::has('mensaje'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('mensaje')}}
          </div>
          <div class="jumbotron border border-info card-border-radius bg-transparent p-5">
            <h3 class="mb-4">Producto destacado</h3>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="text-center btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips" href="/planes" role="button">Destacar producto</a>
            </p>
          </div>
        @endif
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Adjuntar fotos del producto</h4>
          <button class="dz-button" type="button">
          <form action="subir" class="dropzone" id="my-awesome-dropzone" method="get" enctype="multipart/form-data">@csrf</form>
        </div>

      </div>
    </div>
  </div>
  <form name="f1" action="{{route('productos.store')}}" class="container px-0 px-md-5" method="post" enctype="multipart/form-data">@csrf
    <div class="row px-3  px-md-5">
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Detalles del anuncio</h4>

          <label for="nombreProducto">Nombre del producto</label>
          <input class="input" type="text" placeholder="Nombre del producto" name="nombre" id="nombreProducto" value="{{old('nombreProducto')}}">

          <label for="descripcion" class="mt-4">Descripción</label>
          <textarea class="textarea" placeholder="Descripción" name="descripcion" id="descripcion" cols="20" rows="5" value="{{old('descripcion')}}"></textarea>
          <br>

          <label for="nombreProducto">Rango de Precio Estimado:</label>
          {{-- <input class="input" type="text" placeholder="precio del producto" name="precio" id="nombreProducto" value="{{old('precio')}}"> --}}
          <select name="precio" class="select">
            <option value=""></option>
        </select>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Confirma tu ubicación</h4>

          <label for="ciudad">Departamento</label>
          <select name=departamento onchange="cambia_provincia()" id="ciudad" class="select">
              @foreach(\App\Models\Departamento::all() as $departamento)
                  <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
              @endforeach
          </select>

          <label for="municipio" class="mt-4">Municipio</label>
          <select name=municipio id="municipio" class="select">
              <option disabled>-</option>
          </select>
        </div>
      </div>
      <div class="col-12 mb-4" hidden>
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Tipo de anuncio</h4>
          <label for="descripcion">Seleccionar tipo de anuncio</label>
          <select name="tipo_id" id="tipo_id" class="select">
              @foreach( \App\Models\TipoAnuncio::orderBy("id", "desc")->get() as $tipo)
                <option value="{{$tipo->id}}" id="{{$tipo->id}}">{{$tipo->nombre}}</option>
              @endforeach
          </select>
        </div>
      </div>
      <div class="col-12">
        <h2 class="text-center text-uppercase">Cambio por</h2>
        <p class="lead mb-0 mt-3 px-4 text-center" style="font-size: 12px;">Selecciona una (1), dos (2) o tres (3) opciones de productos o servicios que te gustaría recibir a cambio de lo que ofreces. De esta manera, los usuarios que tengan lo que estás buscando podrán contactarte para ofrecerte un trueque. Si no estás buscando algo en específico, pero te gustaría recibir propuestas, puedes seleccionar la categoría “Recibo Propuestas”.</p>
      </div>
      <div class="col-12 mb-4" id="card-categoria">
        <div class="card card-border-radius p-4 p-md-5" id="add-card-categorias">
          <h4 class="mb-4 d-flex justify-content-between">
            Seleccionar categoria
            <a class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-1" id="btnAddCategoria">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="2em" height="2em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 13v-1h6V6h1v6h6v1h-6v6h-1v-6H5z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <span  class="tooltiptext">Agregar categoria</span>
            </a>
          </h4>
          <div class="row" id="select-categoria">
          @for($i = 1; $i <= 3; $i++)
            <div class="col-12 col-md-4 mb-3 mb-md-3 categoria{{$i}}" @if($i != 1) style="display: none;" @endif>
              <label for="categoria">Categorias</label>
              <select name=categoria{{$i}} class="select" onchange="cambia_categoria{{$i}}()" >
                @foreach( \App\Models\Categoria::all() as $categoria)
                  <option value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12 col-md-4 mb-md-3 categoria{{$i}}" @if($i != 1) style="display: none;" @endif>
              <label for="descripcion">Sub categorias</label>
              <select name="subCategoria{{$i}}" class="select">
                  <option value="-">- 
              </select>
            </div>
            <div class="col-12 col-md-4 mb-md-3 categoria{{$i}}" @if($i != 1) style="display: none;" @endif>
              <label for="descripcion">Producto especifico</label>
              <input type="text" class="input" placeholder="moto">
            </div>
          @endfor
          </div>
        </div>
      </div>
      <div class="col-12">
        <div id="archivos">
            <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Publicar</button>
        </div>
        
      </div>
    </div>
    <input type="text" name="categoria_id" value="{{$_GET['categoria_id']}}" hidden>
    <input type="text" name="sub_categoria_id" value="{{$_GET['sub_categoria_id']}}" hidden>
  </form>

@endsection

@section('scriptCSS')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

@endsection

@section('scriptJS')

<script type="text/javascript">
  let = count = 0;

  Dropzone.prototype.defaultOptions.dictDefaultMessage = "Drop files here to upload";
  Dropzone.prototype.defaultOptions.dictFallbackMessage = "Your browser does not support drag'n'drop file uploads.";
  Dropzone.prototype.defaultOptions.dictFallbackText = "Please use the fallback form below to upload your files like in the olden days.";
  Dropzone.prototype.defaultOptions.dictInvalidFileType = "You can't upload files of this type.";
  Dropzone.prototype.defaultOptions.dictCancelUpload = "Cancelar carga";
  Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "Are you sure you want to cancel this upload?";
  Dropzone.prototype.defaultOptions.dictRemoveFile = "Eliminar";
  Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "You can not upload any more files.";

  Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
    maxFilesize: 10, // Tamaño máximo en MB
    dictDefaultMessage: "Ingrese las fotos del producto", // Mensaje de la casa de imagenes
    
    success: function(file, response){
      count = count + 1;
      file.id = count;
      archivos = '<input id=file_'+count+' type="text" name="archivos[]" value="'+response+'" hidden/>';
      $("#archivos").append(archivos);
    },
    addRemoveLinks: true,
       removedfile: function(file) {
         var fileName = file.name; 
        
         $('#file_'+file.id).remove();
         var _ref;
          return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
       }
    
  };



  // mostrar categorias para realizar cambios
  $('#tipo_id').change(function(){
    const tipoAnuncio = $('select[id=tipo_id]').val()
    if (tipoAnuncio == 2) {
      $('#card-categoria').css('display', 'block')
    }else{
      $('#card-categoria').css('display', 'none')
    }
  })

  // añadir categoria y subcategoria
  let cantSelect = 2
  $('#btnAddCategoria').on('click', function(){
    $('.categoria'+cantSelect).css('display', 'block')
    
    if (cantSelect == 3) {
      $('#btnAddCategoria').css('display', 'none')
    }
    cantSelect ++
  })



  // limitar cantidad de categorias
  // console.log($('#select-categoria').append())

@foreach(\App\Models\Departamento::all() as $departamento)

    var provincias_{{$departamento->id}}=new Array(
      @foreach($departamento->municipio as $municipio)
      "{{$municipio->nombre}}",
      @endforeach
      )   
@endforeach


var todasProvincias = [
    [],
    @foreach(\App\Models\Departamento::all() as $departamento)
        provincias_{{$departamento->id}},
    @endforeach
    
];

var todasProvinciasID = [
    [],
    @foreach(\App\Models\Departamento::all() as $departamentoID)
      new Array(
        @foreach($departamentoID->municipio as $municipioID)
            {{$municipioID->id}},
        @endforeach
      ),
    @endforeach
    
];


function cambia_provincia(){ 
   	//tomo el valor del select del departamento elegido 
   	var departamento 
   	departamento = document.f1.departamento[document.f1.departamento.selectedIndex].value 
   	//miro a ver si el departamento está definido 
   	if (departamento != 0) { 
      	//si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
      	//selecciono el array de provincia adecuado 
      	mis_provincias=todasProvincias[departamento] 
      	mis_provinciasID=todasProvinciasID[departamento] 
      	//calculo el numero de provincias 
      	num_provincias = mis_provincias.length 
      	//marco el número de provincias en el select 
      	document.f1.municipio.length = num_provincias 
      	//para cada provincia del array, la introduzco en el select 
      	for(i=0;i<num_provincias;i++){ 
         	document.f1.municipio.options[i].value=mis_provinciasID[i] 
         	document.f1.municipio.options[i].text=mis_provincias[i] 
      	}	
   	}else{ 
      	//si no había provincia seleccionada, elimino las provincias del select 
      	document.f1.municipio.length = 1 
      	//coloco un guión en la única opción que he dejado 
      	document.f1.municipio.options[0].value = "-" 
      	document.f1.municipio.options[0].text = "-" 
   	} 
   	//marco como seleccionada la opción primera de provincia 
   	document.f1.municipio.options[0].selected = true 
}



@foreach(\App\Models\Categoria::all() as $categoriaT)
    var categorias_{{$categoriaT->id}}=new Array(
      @foreach($categoriaT->subCategoria as $subCategoria)
      "{{$subCategoria->nombre}}",
      @endforeach
      )   
      
@endforeach


var todasCategorias = [
    [],
    @foreach(\App\Models\Categoria::all() as $categorias)
        categorias_{{$categorias->id}},
    @endforeach
    
];

var todasCategoriasID = [
    [],
    @foreach(\App\Models\Categoria::all() as $categoriaID)
      new Array(
        @foreach($categoriaID->subCategoria as $subCategoriaID)
            {{$subCategoriaID->id}},
        @endforeach
      ),
    @endforeach
    
];

@for($j = 1; $j <= 3; $j++)
  function cambia_categoria{{$j}}(){ 
      //tomo el valor del select del departamento elegido 
      var categoria 
      categoria = document.f1.categoria{{$j}}[document.f1.categoria{{$j}}.selectedIndex].value 
      //miro a ver si el categoria está definido 
      if (categoria != 0) { 
          //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
          //selecciono el array de provincia adecuado 
          mis_subCategorias=todasCategorias[categoria] 
          mis_categoriasID=todasCategoriasID[categoria] 
          //calculo el numero de provincias 
          num_subCategorias = mis_subCategorias.length 
          //marco el número de provincias en el select 
          document.f1.subCategoria{{$j}}.length = num_subCategorias 
          //para cada provincia del array, la introduzco en el select 
          for(i=0;i<num_subCategorias;i++){ 
            document.f1.subCategoria{{$j}}.options[i].value=mis_categoriasID[i] 
            document.f1.subCategoria{{$j}}.options[i].text=mis_subCategorias[i] 
          }	
      }else{ 
          //si no había provincia seleccionada, elimino las provincias del select 
          document.f1.subCategoria{{$j}}.length = 1 
          //coloco un guión en la única opción que he dejado 
          document.f1.subCategoria{{$j}}.options[0].value = "-" 
          document.f1.subCategoria{{$j}}.options[0].text = "-" 
      } 
      //marco como seleccionada la opción primera de provincia 
      document.f1.subCategoria{{$j}}.options[0].selected = true 
  }
@endfor

</script>
@endsection