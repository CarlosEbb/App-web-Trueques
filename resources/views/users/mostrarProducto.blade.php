@extends('layouts.app')

@section('content')            
  <div class="container">
    <div class="row mt-5">
      <section class="col-12 col-md-8">
        <div class="row px-1">
          <article class="card card-border-radius col-12 p-0">
            <div class="content-img" style="height: 500px;">
              <img src="{{App\Models\Foto::where('producto_id', $producto->id)->first()->ruta}}" class="card-img-rounded-top w-100 h-100" style="object-fit: contain;"  id="foto-producto-src" alt="">
            </div>
            <div class="content-img-product card-footer bg-transparent d-flex ">
              <?php           
                $consulta = App\Models\Foto::where('producto_id', $producto->id)->get();
                ?>
                
              @foreach($consulta as $foto)
                <img src="{{$foto->ruta}}" width="90" class="rounded-lg mx-1 mt-2 fotos-productos-src" alt="">
              @endforeach
            </div>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción</h3>
            <p>{{$producto->descripcion}}</p>
            <span class="footer-product">Publicado el {{$producto->created_at->format('d-m-Y')}}</span>
          </article>
          <!-- Modal -->
          <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Comentarios del vendedor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> 
                </div>
                <div class="modal-body">
                  <ul class="list-unstyled list-comentarios">
                    @forelse(\App\Models\Comentario::where('producto_id', $producto->id)->get() as $comentarios)
                      <li class="media mb-4">
                        <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                        <div class="media-body">
                          <h6 class="mt-0 mb-1 text-dark">{{$comentarios->user->name}}</h6>
                          <p class="text-secondary" style="font-size: 13px;">{{$comentarios->contenido}}</p>
                        </div>
                      </li>
                    @empty
                      <p class="text-center">Este vendedor no tiene comentarios.</p>
                    @endforelse
                  </ul>
                  
                  <form action="{{route('comentarios.store')}}" class="form-inline justify-content-center mt-3" method="post">@csrf
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <input name="contenido" type="text" class="input w-75 mx-4" placeholder="Ingresa tu comentario" required>
                    <input name="producto_id" type="text" class="input w-75 mx-2" value="{{$producto->id}}" hidden>

                    <div class="info-user">
                        <p class="clasificacion">
                          <input id="radio1" type="radio" name="estrellas" value="5" @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() != null) @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 5) checked @endif @endif>
                          <label for="radio1">5★</label>
                          <input id="radio2" type="radio" name="estrellas" value="4" @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() != null) @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 4) checked @endif @endif>
                          <label for="radio2">4★</label>
                          <input id="radio3" type="radio" name="estrellas" value="3" @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() != null) @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 3) checked @endif @endif>
                          <label for="radio3">3★</label>
                          <input id="radio4" type="radio" name="estrellas" value="2" @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() != null) @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 2) checked @endif @endif>
                          <label for="radio4">2★</label>
                          <input id="radio5" type="radio" name="estrellas" value="1" @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() != null) @if(\App\Models\Comentario::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first()->estrellas == 1) checked @endif @endif>
                          <label for="radio5">1★</label>
                        </p>
                    </div>
                    
                    <input class="form-control" type="text" name="producto_id" value="{{$producto->id}}" required hidden>


                    @auth
                    <button class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-2">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.01 6.03l7.51 3.22l-7.52-1l.01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2l-15 2l.01 7L23 12L2.01 3z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    </button>
                    @else
                    <a class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-2" href="{{route('login')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.01 6.03l7.51 3.22l-7.52-1l.01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2l-15 2l.01 7L23 12L2.01 3z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    </a>
                    @endauth
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- <article class="card card-border-radius p-3 col-12 mt-3 h-50" style="max-height: 600px;">
            <h3 class="title-card-product">Comentarios</h3>
            <form action="{{route('comentarios.store')}}" class="form-inline justify-content-center mt-3" method="post">@csrf
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <input name="contenido" type="text" class="input w-75 mx-2" placeholder="Ingresa tu comentario">
              <input name="producto_id" type="text" class="input w-75 mx-2" value="{{$producto->id}}" hidden>
              @auth
              <button class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.01 6.03l7.51 3.22l-7.52-1l.01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2l-15 2l.01 7L23 12L2.01 3z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              </button>
              @else
              <a class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-2" href="{{route('login')}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.01 6.03l7.51 3.22l-7.52-1l.01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2l-15 2l.01 7L23 12L2.01 3z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              </a>
              @endauth
            </form>
            
          </article> --}}
        </div>
      </section>
      <section class="col-12 col-md-4 mt-3 mt-md-0">
        <div class="row px-1">
          <article class="card card-border-radius card-border-active p-3 col-12">
            <h3 class="title-card-product d-flex align-items-center">
              {{ucfirst($producto->nombre)}}
              <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" style="width: 40px; height: 45px;" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$producto->id}}) @endauth">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">favorito</span>
              </a>
            </h3>
            
            

            <p class="name-product">@if($producto->rango->hasta == -1) Mas de ${{number_format($producto->rango->de, 0, ",", ".")}} @else  De ${{number_format($producto->rango->de, 0, ",", ".")}} hasta ${{number_format($producto->rango->hasta, 0, ",", ".")}} @endif</p>
            @if($producto->produc_especifico1 != null)
            <p class="mb-0 text-truncate d-flex aling-items-center mt-2" style="font-size: 14px">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16.71 5.29L19 3h-8v8l2.3-2.3c1.97 1.46 3.25 3.78 3.25 6.42c0 1.31-.32 2.54-.88 3.63c2.33-1.52 3.88-4.14 3.88-7.13c0-2.52-1.11-4.77-2.84-6.33z" fill="#25405f"/><path d="M7.46 8.88c0-1.31.32-2.54.88-3.63a8.479 8.479 0 0 0-3.88 7.13c0 2.52 1.1 4.77 2.84 6.33L5 21h8v-8l-2.3 2.3c-1.96-1.46-3.24-3.78-3.24-6.42z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>--}}
                    Cambio por:
                    @if($producto->produc_especifico1 != null) <br>-{{ucfirst($producto->produc_especifico1)}} @endif
                    @if($producto->produc_especifico2 != null) <br>-{{ucfirst($producto->produc_especifico2)}} @endif
                    @if($producto->produc_especifico3 != null)<br>-{{ucfirst($producto->produc_especifico3)}} @endif
            </p>
            @endif
           

            
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción del vendedor</h3>
            <div class="content-info-user d-flex mt-3">
              <img @if($producto->user->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset($producto->user->foto)}}"  @endif width="50" height="60" class="rounded-circle mr-3" alt="">
              <div class="info-user">
                <p class="mb-0 font-weight-bold">{{$producto->user->name}}</p>
                <span class="footer-product">Miembro desde {{$producto->user->created_at->format('d-m-Y')}}</span>
                <form class="form-recomendaciones d-block">
                  <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5" @if($promedio == 5) checked @endif disabled>
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4" @if($promedio == 4) checked @endif disabled>
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3" @if($promedio == 3) checked @endif disabled>
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2" @if($promedio == 2) checked @endif disabled>
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1" @if($promedio == 1) checked @endif disabled>
                    <label for="radio5">★</label>
                  </p>
                </form>
              </div>
            </div>
            <a @Auth href="{{route('chat')}}?p={{$producto->id}}&v={{$producto->user_id}}&c={{Auth::user()->id}}" @else href="{{route('login')}}" @endauth class=" mt-3 btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips"> <center>Chat</center></a>
            <a href="" class="d-block text-center my-2" data-toggle="modal" data-target=".bd-example-modal-lg">Ver comentarios del vendedor</a>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Publicado en</h3>
            <span>{{$producto->departamento->nombre}}</span>
          </article>
        </div>
      </section>
      <section class="col-12">
        <div class="row">
          <div class="col-12 section-content">
            <h1 class="title">Productos relacionados</h1> 
          </div>
          @foreach($producto->categoria->productos as $articulo)
            @if(($articulo->foto->first() != null) and ($articulo->id != $producto->id))
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar btn-favorito" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$articulo->id}}) @endauth">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$articulo->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $articulo->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">favorito</span>
                  </a>
                  <a href="{{route('productos.show', $articulo->id)}}">
                    <img class="card-img-top card-img-product" src="{{$articulo->foto->first()->ruta}}" alt="Card image cap">
                  </a>
                  <div class="card-body">
                    <a href="{{route('productos.show', $articulo->id)}}">
                      <h5 class="card-title mb-2 card-title-product text-truncate">{{ucfirst($articulo->nombre)}}</h5>
                    </a>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-2" style="font-size: 14px">
                      {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16.71 5.29L19 3h-8v8l2.3-2.3c1.97 1.46 3.25 3.78 3.25 6.42c0 1.31-.32 2.54-.88 3.63c2.33-1.52 3.88-4.14 3.88-7.13c0-2.52-1.11-4.77-2.84-6.33z" fill="#25405f"/><path d="M7.46 8.88c0-1.31.32-2.54.88-3.63a8.479 8.479 0 0 0-3.88 7.13c0 2.52 1.1 4.77 2.84 6.33L5 21h8v-8l-2.3 2.3c-1.96-1.46-3.24-3.78-3.24-6.42z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>--}}
                      Cambio por: <br>@if($articulo->produc_especifico1 != null) -{{ucfirst($articulo->produc_especifico1)}} <br> @else <br> @endif
                                      @if($articulo->produc_especifico2 != null) -{{ucfirst($articulo->produc_especifico2)}} <br> @else <br> @endif
                                      @if($articulo->produc_especifico3 != null) -{{ucfirst($articulo->produc_especifico3)}} <br> @else <br> @endif
                      
                    </p>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-4" style="font-size: 14px">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg> 
                      {{ucwords(strtolower($articulo->municipio->nombre))}}
                    </p>
                    
                  </div>
                </div>
              </article>
           @endif
          @endforeach
        </div>
      </section>
    </div>
  </div>
  <br>
@endsection