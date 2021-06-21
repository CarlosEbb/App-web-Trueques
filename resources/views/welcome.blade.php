@extends('layouts.app')
@section('content')
  {{-- container home --}}
  <div class="container">
    <div class="row">
      <div class="col-12 section-content text-center">
        <p class="text-slogan">Tu tienes lo que quiero, yo tengo lo que quieres.</p>
        <h1 class="title-home">¿Qué estás buscando hoy?</h1> 
      </div>
      <div class="col-12 d-flex justify-content-center  d-block d-md-block d-lg-none">
        <form name="formulariobusqueda" action="{{route('busqueda')}}" method="GET">@csrf
          @include('includes.addBuscador')
          <div class="form-row">
            <div class="col-md-12 m-auto">
              <input type="text" class="form-control input-search" placeholder="Buscar Productos" name="busqueda" required @isset($_GET['busqueda']) value="{{$_GET['busqueda']}}" @endisset>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 10px; top: 8px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            </div>
          </div>
          <button hidden></button>
        </form>
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-categorias">
        @foreach( \App\Models\Categoria::where('status', 1)->orderBy('orden', 'ASC')->get() as $categoria)
          <div class="item d-flex justify-content-center">
            <div class="card border-0 d-flex align-items-center item-categorias" style="width: 18rem;"><a href="{{route('busqueda')}}?categoria={{$categoria->id}}">
              <div class="card-img-top icon-categorias mt-3 p-md-4">
                <img src="{{$categoria->icon}}" class="img-fluid" alt="">
              </div>
              <div class="card-body py-1">
                <h6 class="card-title text-center">
                  <a href="{{route('busqueda')}}?categoria={{$categoria->id}}" class="text-cart-categoria" style="font-size: 15px;">{{$categoria->nombre}}</a>
                </h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    
    {{-- Productos destacados --}}
    <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Productos destacados</h1> 
      </div>
      <div class="col-12">
        <div class="row">
          @foreach( \App\Order::orderByRaw('RAND()')->take(12)->get(); as $destacadoPago)
            @if($destacadoPago->producto->foto->first() != null)
              <article class="col-6 col-md-3  px-2 py-2">
                <div class="card card-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar btn-favorito" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$destacadoPago->producto->id}}) @endauth">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$destacadoPago->producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $destacadoPago->producto->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">favorito</span>
                  </a>
                  <a href="{{route('productos.show', $destacadoPago->producto->id)}}" style="height: 190px;">
                    <img class="card-img-top card-img-product" src="{{$destacadoPago->producto->foto->first()->ruta}}" alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain;" >
                  </a>
                  <div class="card-body">
                    <a href="{{route('productos.show', $destacadoPago->producto->id)}}">
                      <h5 class="card-title mb-2 card-title-product text-truncate">{{ucfirst($destacadoPago->producto->nombre)}}</h5>
                    </a>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-2" style="font-size: 14px">
                      {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16.71 5.29L19 3h-8v8l2.3-2.3c1.97 1.46 3.25 3.78 3.25 6.42c0 1.31-.32 2.54-.88 3.63c2.33-1.52 3.88-4.14 3.88-7.13c0-2.52-1.11-4.77-2.84-6.33z" fill="#25405f"/><path d="M7.46 8.88c0-1.31.32-2.54.88-3.63a8.479 8.479 0 0 0-3.88 7.13c0 2.52 1.1 4.77 2.84 6.33L5 21h8v-8l-2.3 2.3c-1.96-1.46-3.24-3.78-3.24-6.42z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>--}}
                      Cambio por: <br>@if($destacadoPago->producto->produc_especifico1 != null) -{{ucfirst($destacadoPago->producto->produc_especifico1)}} <br> @else <br> @endif
                                     {{-- @if($destacadoPago->producto->produc_especifico2 != null) -{{ucfirst($destacadoPago->producto->produc_especifico2)}} <br> @else <br> @endif 
                                      @if($destacadoPago->producto->produc_especifico3 != null) -{{ucfirst($destacadoPago->producto->produc_especifico3)}} <br> @else <br> @endif --}}
                      
                    </p>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-4" style="font-size: 14px">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg> 
                      {{ucwords(strtolower($destacadoPago->producto->municipio->nombre))}}
                    </p>
                    
                  </div>
                </div>
              </article>
            @endif
          @endforeach
        </div>
      </div>
    </section>

    {{-- Productos populares de la semana --}}
    <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Productos populares de la semana</h1> 
      </div>
      <div class="owl-carousel owl-theme py-2" id="owl-carousel-productos-semana">

        @foreach( \App\Models\Producto::orderByRaw('RAND()')->get() as $destacado)
          @if(($destacado->order->count() == null) and ($destacado->foto->first() != null))
       
     
            <article class="col-12 p-3">
              <div class="card card-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar btn-favorito" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$destacado->id}}) @endauth">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$destacado->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $destacado->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="{{route('productos.show', $destacado->id)}}" style="height: 190px;">
                  <img class="card-img-top card-img-product" src="{{$destacado->foto->first()->ruta}}" alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain;" >
                </a>
                <div class="card-body">
                  <a href="{{route('productos.show', $destacado->id)}}">
                    <h5 class="card-title mb-2 card-title-product text-truncate">{{ucfirst($destacado->nombre)}}</h5>
                  </a>
                  <p class="mb-0 text-truncate d-flex aling-items-center mt-2" style="font-size: 14px">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16.71 5.29L19 3h-8v8l2.3-2.3c1.97 1.46 3.25 3.78 3.25 6.42c0 1.31-.32 2.54-.88 3.63c2.33-1.52 3.88-4.14 3.88-7.13c0-2.52-1.11-4.77-2.84-6.33z" fill="#25405f"/><path d="M7.46 8.88c0-1.31.32-2.54.88-3.63a8.479 8.479 0 0 0-3.88 7.13c0 2.52 1.1 4.77 2.84 6.33L5 21h8v-8l-2.3 2.3c-1.96-1.46-3.24-3.78-3.24-6.42z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>--}}
                    Cambio por: <br>@if($destacado->produc_especifico1 != null) -{{ucfirst($destacado->produc_especifico1)}} <br> @else <br> @endif
                                   {{-- @if($destacado->produc_especifico2 != null) -{{ucfirst($destacado->produc_especifico2)}} <br> @else <br> @endif 
                                    @if($destacado->produc_especifico3 != null) -{{ucfirst($destacado->produc_especifico3)}} <br> @else <br> @endif --}}
                    
                  </p>
                  <p class="mb-0 text-truncate d-flex aling-items-center mt-4" style="font-size: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg> 
                    {{ucwords(strtolower($destacado->municipio->nombre))}}
                  </p>
                  
                </div>
              </div>
            </article>
          @endif
        @endforeach
      </div>
    </section>

    {{-- Categorías Populares --}}
    <section class="row ">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Categorías populares</h1> 
      </div>
      <div class="row w-100 m-auto px-4 px-md-0">
        @foreach( \App\Models\Categoria::where('foto', '!=', null)->orderBy('orden_populares', 'ASC')->paginate(5) as $categoria)
            <article class="col-12 col-md-6 w-100">
              <a class="text-center" href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                <div class="card-body card-body-banner-categorias">
                  <img src="{{asset($categoria->foto)}}" width="800" alt="">
                </div>
                <h5 class="p-3 text-center card-title-banner-categorias">{{$categoria->nombre}}</h5>
              </a>
            </article>
        @endforeach
      </div>
    </section>
  </div>
@endsection

@section('scriptJS')
  <script>
    $('#owl-carousel-categorias').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      // autoplay:true,
      autoplayTimeout:2500,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:4,
              center: true,
          },
          600:{
              items:4
          },
          1000:{
              items:8
          }
      }
    })

    $('#owl-carousel-productos-semana').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:2,
              center: true,
              margin:0,
          },
          600:{
              items:3,
              center: true,
          },
          1000:{
              items:4
          }
      }
    })
  </script>

@endsection