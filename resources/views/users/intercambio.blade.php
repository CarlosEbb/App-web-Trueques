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
          <h2 class="title">Mis Intercambios</h2>
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
              {{--<div class="">
                <p class="d-inline-block">Filtrar por: </p>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todos();">Ver todos ({{Auth::user()->productos->count()}})</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todosActivos('activo');">Anuncios activos ({{Auth::user()->productos->where('status', 1)->count()}})</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm " onclick="todosActivos('deshabilitado');">Anuncios inactivos ({{Auth::user()->productos->where('status', 0)->count()}})</button>
                button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Anuncios pendientes (0)</button>
              </div> --}}
            </div>
          </div>
        </div> 

        @forelse(\App\Chat::all()->where('user_id', Auth::user()->id)->groupBy('producto_id') as $desclosado)
                <?php
                  $chat = $desclosado->first()
                ?>
            
        
          <div class="col-12 mb-3 item">
          <label hidden class="nombres">{{$chat->producto->nombre}}</label>
          <label hidden class="estado">@if($chat->producto->status == true) activo @else deshabilitado @endif </label>
            <div class="card shadow border-0 mb-3">
              <div class="row no-gutters">
                <div class="col-md-2">
                  <img src="@if($chat->producto->foto->first() != null) {{$chat->producto->foto->first()->ruta}} @endif" class="card-img card-img-anucios" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <a href="{{route('productos.show', $chat->producto->id)}}"><h5 class="card-title mb-1">{{$chat->user->name}} - {{$chat->producto->nombre}}</h5></a>
                    <h6 class="card-title mb-3"><small class="text-muted">Precio</small> De ${{number_format($chat->producto->rango->de, 0, ",", ".")}} hasta ${{number_format($chat->producto->rango->hasta, 0, ",", ".")}}
                    @if($chat->producto->status == true)
                      <span class="badge badge-pill badge-success">publicado</span>
                    @else
                      <span class="badge badge-pill badge-danger">No publicado</span>
                    @endif
                    
                    @if(\App\Order::where('producto_id', $chat->producto->id)->count())
                        <span class="badge badge-pill badge-warning">destacado</span>
                    @endif
                        
                    <p class="card-text">{{$chat->producto->descripcion}}</p>
                    <p class="card-text mb-0">
                      <small class="text-muted">Publicado el <b>{{$chat->producto->created_at->format('d-m-Y')}}</b></small>
                    </p>
                  </div>
                  <div class="card-footer py-0 bg-transparent d-flex justify-content-end">
                    <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" href="{{route('chat')}}?p={{$chat->producto->id}}&v={{$chat->producto->user_id}}&c={{Auth::user()->id}}">Ir al chat</a>
                    @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->count() !== 0)
                      <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#vercalificar_{{$chat->producto->id}}">Ver calificación</a>
                
                      <!-- Modal ver calificar-->
                      <div class="modal fade" id="vercalificar_{{$chat->producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_vercalificar_{{$chat->producto->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-lato" id="ModalLabel_vercalificar_{{$chat->producto->id}}">Ver calificación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['route' => 'comentarios.store', 'files' => true]) !!}
                                        <div>
                                          <div class="modal-body">
                                            <div class="info-user">
                                              <p class="mb-0 font-weight-bold">{{$chat->producto->user->name}}</p>
                                              <span class="footer-product">Miembro desde {{$chat->producto->user->created_at->format('d-m-Y')}}</span>
                                                <p class="clasificacion">
                                                  <input id="radio1" type="radio" name="estrellas" value="5" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 5) checked @endif>
                                                  <label for="radio1">★</label>
                                                  <input id="radio2" type="radio" name="estrellas" value="4" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 4) checked @endif>
                                                  <label for="radio2">★</label>
                                                  <input id="radio3" type="radio" name="estrellas" value="3" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 3) checked @endif>
                                                  <label for="radio3">★</label>
                                                  <input id="radio4" type="radio" name="estrellas" value="2" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 2) checked @endif>
                                                  <label for="radio4">★</label>
                                                  <input id="radio5" type="radio" name="estrellas" value="1" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 1) checked @endif>
                                                  <label for="radio5">★</label>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Comentario</label>
                                                <textarea disabled class="form-control" name="contenido" id="" cols="10" rows="2" required>{{\App\Models\Comentario::where('producto_id', $chat->producto->id)->first()->contenido}}</textarea>
                                            </div>
                                            <input class="form-control" type="text" name="producto_id" value="{{$chat->producto->id}}" required hidden>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>

                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                      </div>

                    @else
                      <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#calificar_{{$chat->producto->id}}">Calificar intercambio</a>
                      
                    @endif
                    
                    <!-- Modal calificar-->
                    <div class="modal fade" id="calificar_{{$chat->producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_calificar_{{$chat->producto->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-lato" id="ModalLabel_calificar_{{$chat->producto->id}}">Calificar Intercambio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => 'comentarios.store', 'files' => true]) !!}
                                    <div>
                                      <div class="modal-body">
                                        <div class="info-user">
                                          <p class="mb-0 font-weight-bold">{{$chat->producto->user->name}}</p>
                                          <span class="footer-product">Miembro desde {{$chat->producto->user->created_at->format('d-m-Y')}}</span>
                                            <p class="clasificacion">
                                              <input id="radio1" type="radio" name="estrellas" value="5">
                                              <label for="radio1">★</label>
                                              <input id="radio2" type="radio" name="estrellas" value="4">
                                              <label for="radio2">★</label>
                                              <input id="radio3" type="radio" name="estrellas" value="3">
                                              <label for="radio3">★</label>
                                              <input id="radio4" type="radio" name="estrellas" value="2">
                                              <label for="radio4">★</label>
                                              <input id="radio5" type="radio" name="estrellas" value="1">
                                              <label for="radio5">★</label>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Comentario</label>
                                            <textarea class="form-control" name="contenido" id="" cols="10" rows="2" required></textarea>
                                        </div>
                                        <input class="form-control" type="text" name="producto_id" value="{{$chat->producto->id}}" required hidden>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <input class="btn btn-warning" type="submit" value="Calificar">
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
            <h3 class="text-center my-3" style="color: #737373;">Busca tu primer intercambio</h3>
            <img src="{{asset('img/Post-online.svg')}}" class="mt-4" width="250" alt="">
          </div>
        @endforelse
              
        <?php
          unset($desclosado);
          unset($chat);
        ?>

        @foreach(\App\Chat::all()->where('user_comprador_id', Auth::user()->id)->groupBy('producto_id') as $desclosado)
        <?php
            $chat = $desclosado->first()
          ?>
        
          <div class="col-12 mb-3 item">
          <label hidden class="nombres">{{$chat->producto->nombre}}</label>
          <label hidden class="estado">@if($chat->producto->status == true) activo @else deshabilitado @endif </label>
            <div class="card shadow border-0 mb-3">
              <div class="row no-gutters">
                <div class="col-md-2">
                  <img src="@if($chat->producto->foto->first() != null) {{$chat->producto->foto->first()->ruta}} @endif" class="card-img card-img-anucios" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <a href="{{route('productos.show', $chat->producto->id)}}"><h5 class="card-title mb-1">{{$chat->user->name}} - {{$chat->producto->nombre}}</h5></a>
                    <h6 class="card-title mb-3"><small class="text-muted">Precio</small> De ${{number_format($chat->producto->rango->de, 0, ",", ".")}} hasta ${{number_format($chat->producto->rango->hasta, 0, ",", ".")}}
                    @if($chat->producto->status == true)
                      <span class="badge badge-pill badge-success">publicado</span>
                    @else
                      <span class="badge badge-pill badge-danger">No publicado</span>
                    @endif
                    
                    @if(\App\Order::where('producto_id', $chat->producto->id)->count())
                        <span class="badge badge-pill badge-warning">destacado</span>
                    @endif
                        
                    <p class="card-text">{{$chat->producto->descripcion}}</p>
                    <p class="card-text mb-0">
                      <small class="text-muted">Publicado el <b>{{$chat->producto->created_at->format('d-m-Y')}}</b></small>
                    </p>
                  </div>
                  <div class="card-footer py-0 bg-transparent d-flex justify-content-end">
                    <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" href="{{route('chat')}}?p={{$chat->producto->id}}&v={{$chat->producto->user_id}}&c={{Auth::user()->id}}">Ir al chat</a>
                    @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->count() !== 0)
                      <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#vercalificar_{{$chat->producto->id}}">Ver calificación</a>
                
                      <!-- Modal ver calificar-->
                      <div class="modal fade" id="vercalificar_{{$chat->producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_vercalificar_{{$chat->producto->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-lato" id="ModalLabel_vercalificar_{{$chat->producto->id}}">Ver calificación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['route' => 'comentarios.store', 'files' => true]) !!}
                                        <div>
                                          <div class="modal-body">
                                            <div class="info-user">
                                              <p class="mb-0 font-weight-bold">{{$chat->producto->user->name}}</p>
                                              <span class="footer-product">Miembro desde {{$chat->producto->user->created_at->format('d-m-Y')}}</span>
                                                <p class="clasificacion">
                                                  <input id="radio1" type="radio" name="estrellas" value="5" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 5) checked @endif>
                                                  <label for="radio1">★</label>
                                                  <input id="radio2" type="radio" name="estrellas" value="4" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 4) checked @endif>
                                                  <label for="radio2">★</label>
                                                  <input id="radio3" type="radio" name="estrellas" value="3" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 3) checked @endif>
                                                  <label for="radio3">★</label>
                                                  <input id="radio4" type="radio" name="estrellas" value="2" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 2) checked @endif>
                                                  <label for="radio4">★</label>
                                                  <input id="radio5" type="radio" name="estrellas" value="1" disabled @if(\App\Models\Comentario::where('producto_id', $chat->producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 1) checked @endif>
                                                  <label for="radio5">★</label>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Comentario</label>
                                                <textarea disabled class="form-control" name="contenido" id="" cols="10" rows="2" required>{{\App\Models\Comentario::where('producto_id', $chat->producto->id)->first()->contenido}}</textarea>
                                            </div>
                                            <input class="form-control" type="text" name="producto_id" value="{{$chat->producto->id}}" required hidden>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>

                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                      </div>

                    @else
                      <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#calificar_{{$chat->producto->id}}">Calificar intercambio</a>
                      
                    @endif
                    
                    <!-- Modal calificar-->
                    <div class="modal fade" id="calificar_{{$chat->producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_calificar_{{$chat->producto->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-lato" id="ModalLabel_calificar_{{$chat->producto->id}}">Calificar Intercambio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => 'comentarios.store', 'files' => true]) !!}
                                    <div>
                                      <div class="modal-body">
                                        <div class="info-user">
                                          <p class="mb-0 font-weight-bold">{{$chat->producto->user->name}}</p>
                                          <span class="footer-product">Miembro desde {{$chat->producto->user->created_at->format('d-m-Y')}}</span>
                                            <p class="clasificacion">
                                              <input id="radio1" type="radio" name="estrellas" value="5">
                                              <label for="radio1">★</label>
                                              <input id="radio2" type="radio" name="estrellas" value="4">
                                              <label for="radio2">★</label>
                                              <input id="radio3" type="radio" name="estrellas" value="3">
                                              <label for="radio3">★</label>
                                              <input id="radio4" type="radio" name="estrellas" value="2">
                                              <label for="radio4">★</label>
                                              <input id="radio5" type="radio" name="estrellas" value="1">
                                              <label for="radio5">★</label>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Comentario</label>
                                            <textarea class="form-control" name="contenido" id="" cols="10" rows="2" required></textarea>
                                        </div>
                                        <input class="form-control" type="text" name="producto_id" value="{{$chat->producto->id}}" required hidden>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <input class="btn btn-warning" type="submit" value="Calificar">
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
        
       @endforeach
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
