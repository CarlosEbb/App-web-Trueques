@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0 d-flex justify-content-between">
        <h2 class="m-0 p-0 title-content"></h2>
        <div class="option-menu d-flex">
           
        </div>
    </div>

    <div class="container" style="min-height: 65vh;">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <h2 class="title">Anuncios de "{{$user->name}}"</h2>
        </div>
        <div class="col-12 my-5">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-5">
              <form>
                <div class="d-flex">
                  <input id="buscador" type="input" class="input pl-5" placeholder="buscar por nombre de producto" onkeyup="filtrar();">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 25px; top: 12px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                </div>
              </form>
            </div>
            <div class="col-9 col-md-12 col-lg-7">
             
            </div>
          </div>
        </div> 

        @forelse($productos as $producto)
        
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
                    <a href="{{route('productos.show', $producto->id)}}"><h5 class="card-title mb-1">{{$producto->nombre}}</h5></a>
                    <h6 class="card-title mb-3"><small class="text-muted">Precio</small> De ${{number_format($producto->rango->de, 0, ",", ".")}} hasta ${{number_format($producto->rango->hasta, 0, ",", ".")}}
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
