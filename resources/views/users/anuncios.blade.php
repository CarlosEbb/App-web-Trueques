@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0 d-flex justify-content-between">
        <h2 class="m-0 p-0 title-content"></h2>
        <div class="option-menu d-flex">
            <a class="text-table btn-menu tooltips" href="{{route('selecionar-categorias')}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.49 2 2 6.49 2 12s4.49 10 10 10s10-4.49 10-10S17.51 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="title-icon">Crear anuncio</span>
                <span class="tooltiptext">Crear anuncio</span>
            </a>
        </div>
    </div>

    <div class="container" style="min-height: 65vh;">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <h2 class="title">Mis anuncios</h2>
        </div>
        <div class="col-12 my-5">
          <div class="row">
            <div class="col-9 col-md-12 col-lg-7">
              <div class="">
                <p class="d-inline-block">Filtrar por: </p>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todos();">Ver todos ({{Auth::user()->productos->count()}})</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todosActivos('activo');">Anuncios activos ({{Auth::user()->productos->where('status', 1)->count()}})</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todosActivos('deshabilitado');">Anuncios inactivos ({{Auth::user()->productos->where('status', 0)->count()}})</button>
                {{-- button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Anuncios pendientes (0)</button> --}}
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5">
              <form>
                <div class="d-flex">
                  <input id="buscador" type="input" class="input pl-5" placeholder="buscar por nombre de producto" onkeyup="filtrar();">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 25px; top: 12px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                </div>
              </form>
            </div>
          </div>
        </div> 

        @forelse(Auth::user()->productos as $producto)
        
          <div class="col-12 mb-3 item">
          <label hidden class="nombres">{{$producto->nombre}}</label>
          <label hidden class="estado">@if($producto->status == true) activo @else deshabilitado @endif </label>
            <div class="card shadow border-0 mb-3">
              <div class="row no-gutters">
                <div class="col-md-2">
                  <img src="@if($producto->foto->first() != null) {{$producto->foto->first()->ruta}} @endif" class="card-img card-img-anucios" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <h5 class="card-title mb-1">{{$producto->nombre}}</h5>
                    <h6 class="card-title mb-3"><small class="text-muted">Precio</small> {{$producto->precio}} 
                    @if($producto->status == true)
                      <span class="badge badge-pill badge-success">publicado</span>
                    @else
                      <span class="badge badge-pill badge-danger">No publicado</span>
                    @endif
                    
                    
                    @if(\App\Order::where('producto_id', $producto->id)->count())
                        <span class="badge badge-pill badge-warning">destacado</span>
                    @endif

                    <p class="card-text">{{$producto->descripcion}}</p>
                    <p class="card-text mb-0">
                      <small class="text-muted">Publicado el <b>{{$producto->created_at->format('d-m-Y')}}</b></small>
                    </p>
                  </div>
                  <div class="card-footer py-0 bg-transparent d-flex justify-content-end">
                    
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
                        <button type="button" class="btn btn-outline-danger mx-2 mt-2 rounded-pill">Eliminar</button>
                    {!! Form::close() !!}
                    
                    <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#editar_{{$producto->id}}">Editar</a>
                    @if(!\App\Order::where('producto_id', $producto->id)->count())
                      <a href="/planes?p={{$producto->id}}" class="btn btn-outline-info mx-2 mt-2 rounded-pill">Destacar producto</a>
                    @endif
                    <!-- Modal Editar-->
                    <div class="modal fade" id="editar_{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$producto->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-lato" id="ModalLabel_editar_{{$producto->id}}">Actualizar Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT', 'files' => true]) !!}
                                    <div>
                                      <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Nombre</label>
                                                <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Descripción</label>
                                                <textarea class="form-control" name="descripcion" cols="30" rows="10" required>{{$producto->descripcion}}</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Categoría</label>
                                                  <select name="categoria_id" class="select">
                                                    @foreach( \App\Models\Categoria::all() as $categoria)
                                                      <option value="{{$categoria->id}}" @if($producto->categoria_id == $categoria->id) selected @endif>{{$categoria->nombre}}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Rango de precio</label>
                                                  <select name="precio_id" class="select" id="precio">
                                                    @foreach( \App\Models\Precio::all() as $precio)
                                                      <option value="{{$precio->id}}"  @if($producto->precio_id == $precio->id) selected @endif>De {{number_format($precio->de, 2, ",", ".")}} a {{number_format($precio->hasta, 2, ",", ".")}} {{$precio->moneda->nombre}}</</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Estatus</label>
                                                  <select name="status" class="select" id="precio">
                                                      <option value="1"  @if($producto->status == true) selected @endif>Publicado</</option>
                                                      <option value="0"  @if($producto->status == false) selected @endif>Pausado</</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input class="btn btn-warning" type="submit" value="Actualizar">
                                        </div>

                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="d-flex justify-content-center flex-column align-items-center w-100">
            <h3 class="text-center my-3" style="color: #737373;">Publica tu primer producto</h3>
            <img src="{{asset('img/Post-online.svg')}}" class="mt-4" width="250" alt="">
          </div>
        @endforelse   
      </div>
    </div>
    
@endsection

@section('scriptJS')

  <script>
      function filtrar(){
          var nombres = $('.nombres');
          var buscando =  $('#buscador').val();
          var item='';
          let count = nombres.length;
          for( var i = 0; i < nombres.length; i++ ){
              item = $(nombres[i]).html().toLowerCase();
                for(var x = 0; x < item.length; x++ ){
                    if( buscando.length == 0 || item.indexOf( buscando ) > -1 ){
                        $(nombres[i]).parents('.item').show(); 
                    }else{
                        $(nombres[i]).parents('.item').hide();
                    }
                }
          }
      }

      function todos(){
        $('#buscador').val('');
        filtrar();
      }

      function todosActivos(estado){
          var nombres = $('.estado');
          var buscando = estado;
          var item='';
          let count = nombres.length;
          for( var i = 0; i < nombres.length; i++ ){
              item = $(nombres[i]).html().toLowerCase();
                for(var x = 0; x < item.length; x++ ){
                    if( buscando.length == 0 || item.indexOf( buscando ) > -1 ){
                        $(nombres[i]).parents('.item').show(); 
                    }else{
                        $(nombres[i]).parents('.item').hide();
                    }
                }
          }
      }
  </script>

@endsection
