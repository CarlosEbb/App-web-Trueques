@extends('layouts.app')
@section('content')
  {{-- slider home --}}
  {{-- <div class="container-fluid m-0 mt-2 p-0 bg-slider" >
    <div id="carouselExampleIndicators" class="carousel slide h-100 d-flex align-items-center" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="p-3 d-flex">
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/telefono.png')}}"  class="animate__animated animate__fadeInLeftBig animate__delay-1s img-responsive-slide img-slider-tlf" style="margin-right: 30%;" alt="telefono">
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/tablet.png')}}"    class="animate__animated animate__fadeInRight animate__delay-1s img-responsive-slide" style="margin-left: 30%;"   alt="tablet">
            </div>
          </div>
          <h2 class="title-slider animate__animated animate__fadeIn animate__delay-1s">TECNOLOGÍA</h2>
        </div>
        <div class="carousel-item">
          <div class="p-3 d-flex">
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/carro.png')}}"  class="animate__animated animate__fadeInLeftBig animate__delay-1s img-responsive-slide" style="margin-right: 30%;" alt="telefono">
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/moto.png')}}"    class="animate__animated animate__fadeInRight animate__delay-1s img-responsive-slide" style="margin-left: 30%;"   alt="tablet">
            </div>
          </div>
          <h2 class="title-slider animate__animated animate__fadeIn animate__delay-1s">VEHÍCULOS</h2>
        </div>
        <div class="carousel-item">
          <div class="p-3 d-flex">
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/televisor.png')}}"  class="animate__animated animate__fadeInLeftBig animate__delay-1s img-responsive-slide" style="margin-right: 30%;" alt="telefono">
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center px-3">
              <img src="{{asset('img/mueble.png')}}"    class="animate__animated animate__fadeInRight animate__delay-1s img-responsive-slide" style="margin-left: 30%;"   alt="tablet">
            </div>
          </div>
          <h2 class="title-slider animate__animated animate__fadeIn animate__delay-1s">HOGAR</h2>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> --}}

  {{-- container home --}}
  <div class="container">
    <div class="row">
      <div class="col-12 section-content text-center">
        <p style="font-size: 20px">Tu tienes lo que quiero, yo tengo lo que quieres.</p>
        <h1 class="title-home">¿Qué estás buscando hoy?</h1> 
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-categorias">
        @foreach( \App\Models\Categoria::where('status', 1)->orderBy('orden', 'ASC')->get() as $categoria)
          <div class="item d-flex justify-content-center">
            <div class="card border-0 d-flex align-items-center item-categorias" style="width: 18rem;"><a href="{{route('busqueda')}}?categoria={{$categoria->id}}">
              <div class="card-img-top icon-categorias mt-3">
                <img src="{{$categoria->icon}}" alt="">
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
    
    {{-- Productos populares de la semana --}}
    <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Productos populares de la semana</h1> 
      </div>
      <div class="owl-carousel owl-theme py-2" id="owl-carousel-productos-semana">
        @foreach( \App\Models\Producto::paginate(4) as $destacado)
        @if($destacado->foto->first() != null)
        <article class="col-12 p-3">
          <div class="card card-product">
            <a href="{{route('productos.show', $destacado->id)}}">
            
              <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar btn-favorito" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$destacado->id}}) @endauth">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$destacado->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $destacado->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">favorito</span>
              </a>
             
            <img class="card-img-top card-img-product" src="{{$destacado->foto->first()->ruta}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-2 card-title-product text-truncate">{{$destacado->nombre}}</h5>
              <p class="mb-0 text-truncate d-flex aling-items-center" style="font-size: 14px"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg> {{$destacado->departamento->nombre}}</p>
              @if($destacado->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
            </div>
          </a>
          </div>
        </article>
        @endif
      @endforeach
      </div>
    </section>

    {{-- <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Productos populares de la semana</h1> 
      </div>
      <div class="owl-carousel owl-theme py-2" id="owl-carousel-productos-semana">
        @foreach( \App\Models\Producto::paginate(4) as $destacado)
        @if($destacado->foto->first() != null)
          <article class="col-12 p-3">
            <div class="card card-product">
              <a href="{{route('productos.show', $destacado->id)}}"><img class="card-img-top card-img-product" src="{{$destacado->foto->first()->ruta}}" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title mb-2 card-title-product text-truncate">{{$destacado->nombre}}</h5>
                <div class="product-description">
                  <span>{{$destacado->descripcion}}</span>
                </div>
                <p class="mb-0 text-truncate" style="font-size: 12px">publicado en: {{$destacado->departamento->nombre}}</p>
                @if($destacado->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
              </div>
              <div class="card-footer card-footer-product  px-3 pb-3">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$destacado->id}}) @endauth">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$destacado->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $destacado->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="{{route('productos.show', $destacado->id)}}" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
              </div>
            </div>
          </article>
        @endif
      @endforeach
      </div>
    </section> --}}


    {{-- <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Productos populares de la semana</h1> 
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-productos-semana">
        @foreach( \App\Models\ProductoUserClick::paginate(4) as $destacado)
          <div class="item d-flex justify-content-center">
            @if($destacado->producto->foto->first() != null)
              <article class="col-12 px-3 px-sm-3 mb-4 py-1">
                <div class="card card-product-s">
                  <a href="{{route('productos.show', $destacado->producto->id)}}">
                    <img class="card-img-product-s" src="{{$destacado->producto->foto->first()->ruta}}" height="150" width="150" alt="Card image cap">
                  </a>
                </div>
              </article>
            @endif
          </div>
        @endforeach
      </div>
    </section> --}}


    {{-- <section class="row section-content-border">
      <div class="col-12">
        <h1 class="title">Productos populares de la semana</h1> 
      </div>
      
      @foreach( \App\Models\Producto::paginate(4) as $destacado)
        @if($destacado->foto->first() != null)
          <article class="col-12 px-3 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product h-100">
              <a href="{{route('productos.show', $destacado->id)}}"><img class="card-img-top card-img-product" src="{{$destacado->foto->first()->ruta}}" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title mb-3 card-title-product text-truncate">{{$destacado->nombre}}</h5>
                <div class="product-description">
                  <span class="mb-3">{{$destacado->descripcion}}</span>
                </div>
                <p class="mb-0 text-truncate" style="font-size: 12px">publicado en: {{$destacado->departamento->nombre}}</p>
                @if($destacado->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
              </div>
              <div class="card-footer card-footer-product  px-3 pb-3">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$destacado->id}}) @endauth">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$destacado->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $destacado->id)->where('user_id', Auth::user()->id)->first() == null) fill="#009fb7" @else fill="red" @endif @else fill="#009fb7" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="{{route('productos.show', $destacado->id)}}" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
              </div>
            </div>
          </article>
        @endif
      @endforeach
    </section> --}}

    {{-- Categorías Populares --}}
    <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Categorías populares</h1> 
      </div>
      <div class="row">
        @foreach( \App\Models\Categoria::where('foto', '!=', null)->orderBy('created_at','DESC')->paginate(5) as $categoria)
          {{-- <div class="col-8"> --}}
            <article class="col-6">
              <a class="text-center" href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                <div class="card-body card-body-banner-categorias">
                  <div class="row">
                    <div class="col-12 col-md-12">
                        <img src="{{asset($categoria->foto)}}" width="200" height="300" alt="">
                      </div>
                    </div>
                  </div>
                  <h5 class="p-3 text-center card-title-banner-categorias">{{$categoria->nombre}}</h5>
                </a>
            </article>
          {{-- </div> --}}
        @endforeach
      </div>
    </section>
    {{-- <section class="row">
      <div class="col-12 section-content">
        <h1 class="sub-title-home">Categorías populares</h1> 
      </div>
      <div class="owl-carousel owl-theme" id="owl-carousel-categorias-populares">
        @foreach( \App\Models\Categoria::where('foto', '!=', null)->orderBy('created_at','DESC')->paginate(5) as $categoria)
          <div class="item d-flex justify-content-center">
            <article class="col-12 mb-4">
                <div class="card-body card-body-banner-categorias">
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <a href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                        <img src="{{asset($categoria->foto)}}" width="300" height="250" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <h5 class="p-3 text-center card-title-banner-categorias">{{$categoria->nombre}}</h5>
            </article>
          </div>
        @endforeach
      </div>
    </section> --}}
    {{-- <section class="row">
      <div class="col-12 section-content">
        <h1 class="title">Categorías populares</h1> 
      </div>
  
      @foreach( \App\Models\Categoria::paginate(4) as $categoria)
        <article class="col-12 col-md-6 mb-4">
          <div class="card card-banner-product p-1">
            <div class="card-body card-body-banner-categorias">
              <div class="row">
                <div class="col-12 col-md-12">
                  <a href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                    <img src="{{asset($categoria->foto)}}" width="300" height="250" alt="">
                  </a>
                </div>
              </div>
            </div>
            <h5 class="p-3">
              {{$categoria->nombre}}
              <p class="lead p-0 m-0" style="font-size: 15px;">{{$categoria->productos->count()}} anuncios</p>
            </h5>
            
          </div>
        </article>
      @endforeach
    </section> --}}

    {{-- Productos recientes --}}
    {{-- <section class="row section-content-border">
      <div class="col-12">
        <h1 class="title">Productos Recientes</h1> 
      </div>
      
      @foreach( \App\Models\Producto::orderBy('created_at','DESC')->paginate(4) as $producto)
        @if($producto->foto->first() != null)
          <article class="col-12 px-3 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product h-100">
            <a href="{{route('productos.show', $producto->id)}}"><img class="card-img-top card-img-product" src="{{$producto->foto->first()->ruta}}" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title mb-3 card-title-product text-truncate">{{$producto->nombre}}</h5>
                <div class="product-description">
                  <span class="mb-3">{{$producto->descripcion}}</span>
                </div>
                <p class="mb-0 text-truncate" style="font-size: 12px">publicado en: {{$producto->departamento->nombre}}</p>
                @if($producto->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
                
              </div>
              <div class="card-footer card-footer-product  px-3 pb-3">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$producto->id}}) @endauth">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() == null) fill="#009fb7" @else fill="red" @endif @else fill="#009fb7" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="{{route('productos.show', $producto->id)}}" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
              </div>
            </div>
          </article>
        @endif
      @endforeach
    </section> --}}
  </div>
@endsection

@section('scriptJS')
  <script>
    $('#owl-carousel-categorias').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:2500,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
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
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
    })

    // $('#owl-carousel-categorias-populares').owlCarousel({
    //   loop:true,
    //   margin:10,
    //   nav:true,
    //   autoplay:true,
    //   autoplayTimeout:3000,
    //   autoplayHoverPause:true,
    //   responsive:{
    //       0:{
    //           items:1
    //       },
    //       600:{
    //           items:2
    //       },
    //       1000:{
    //           items:3
    //       }
    //   }
    // })
  </script>

@endsection