@extends('layouts.app')

@section('content')
  <form action="{{route('productos.store')}}" class="container px-0 px-md-5 dropzone" method="post" enctype="multipart/form-data">@csrf
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
        @endif
    <div class="row px-3  px-md-5">
      <div class="col-12 text-center mt-5">
        <h2 class="text-uppercase">publica tu producto</h2>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Seleccionar categoria</h4>

          <label for="descripcion">Categorias</label>
          <select name="categoria_id" class="select">
            @foreach( \App\Models\Categoria::all() as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Detalles del anuncio</h4>
          <label for="nombreProducto">Nombre del producto</label>
          <input class="input" type="text" placeholder="Nombre del producto" name="nombre" id="nombreProducto" value="{{old('nombreProducto')}}">

          <label for="descripcion" class="mt-4">Descripción</label>
          <textarea class="textarea" placeholder="Descripción" name="descripcion" id="descripcion" cols="20" rows="5" value="{{old('descripcion')}}"></textarea>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Rango de precio</h4>

          <label for="precio">Precios</label>
          <select name="precio_id" class="select" id="precio">
            @foreach( \App\Models\Precio::all() as $precio)
              <option value="{{$precio->id}}">De {{number_format($precio->de, 2, ",", ".")}} a {{number_format($precio->hasta, 2, ",", ".")}} {{$precio->moneda->nombre}}</</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Adjuntar fotos del producto</h4>
          <button class="dz-button" type="button">
          <div class="dz-default dz-message">Drop files here to upload</button></div>
        </div>
      </div>
        <div class="col-12 mb-4">
          <div class="card card-border-radius p-4 p-md-5">
            <h4 class="mb-4">Confirma tu ubicación</h4>

            <label for="ciudad">Ciudad</label>
            <select name="departamento_id" id="ciudad" class="select">
                @foreach( \App\Models\Departamento::all() as $ciudad)
                <option value="{{$ciudad->id_departamento}}">{{$ciudad->departamento}}</option>
                @endforeach    
            </select>

            <label for="municipio" class="mt-4">Municipio</label>
            <select name="municipio_id" id="municipio" class="select">
                @foreach( \App\Models\Municipio::all() as $municipio)
                <option value="{{$municipio->id_municipio}}">{{$municipio->municipio}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="col-12">
          <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Publicar</button>
        </div>
      </div>
    </div>
  </form>
@endsection

@section('scriptCSS')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

@endsection

@section('scriptJS')

<script type="text/javascript">

  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    $.ajax({
      url:"{{route('productos.store')}}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }

  $(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
      url:"{{route('productos.destroy',"+name+")}}",
      data:{name : name},
      success:function(data){
        load_images();
      }
    })
  });

</script>  
@endsection