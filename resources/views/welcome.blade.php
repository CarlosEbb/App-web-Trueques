@extends('layouts.app')


@section('content')
    <div class="container-fluid m-0 mt-2 p-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 mt-1" src="{{asset('img/banner-home.png')}}" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 mt-1" src="http://placehold.jp/1440x361.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 mt-1" src="http://placehold.jp/1440x361.png" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    </section>

    
    {{-- Productos destacados --}}
    <section class="row">
      <div class="col-12 section-content">
        <h1 class="title">Productos populares de la semana</h1> 
      </div>
      @foreach( \App\Models\Producto::paginate(4) as $destacado)
      @if($destacado->foto->first() != null)
      
      <article class="col-12 col-sm-6 col-md-4 col-lg-3 px-5 px-sm-3 mb-4 py-1">
        <div class="card card-product h-100">
        <a href="{{route('productos.show', $destacado->id)}}"><img class="card-img-top card-img-product" src="{{$destacado->foto->first()->ruta}}" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title mb-3 card-title-product text-truncate">{{$destacado->nombre}}</h5>
            <div class="product-description">
              <span class="mb-3">{{$destacado->descripcion}}</span>
            </div>
            <p class="mb-0" style="font-size: 12px">publicado en: {{$destacado->departamento->nombre}}</p>
            @if($destacado->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
                <span class="badge badge-pill badge-success">{{$destacado->tipo->nombre}}</span>
          </div>
          <div class="card-footer card-footer-product px-3 pb-3">
            <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" onclick="addFavoritos({{$destacado->id}})">
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
    </section>

      {{-- Categorías Populares --}}
      <section class="row">
        <div class="col-12 section-content">
          <h1 class="title">Categorías populares</h1> 
        </div>

        @foreach( \App\Models\Categoria::orderBy('nombre', 'ASC')->paginate(4) as $categoria)
        <article class="col-12 col-md-6 mb-4">
          <div class="card card-banner-product">
            <div class="card-body card-body-banner-categorias">
              <div class="row">
                <div class="col-12 col-md-6 p-0">
                  <a href="{{route('busqueda')}}?categoria={{$categoria->id}}"><img src="{{$categoria->foto}}" width="312" height="250" alt=""></a>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center px-0">
                  <h5 class="pl-3 p-md-0 mb-5 mb-md-0">{{$categoria->nombre}}</h5>
                </div>
              </div>
            </div>
            <div class="card-footer card-footer-product" style="right: 20px; position: absolute; bottom: 20px;">
              <a href="{{route('busqueda')}}?categoria={{$categoria->id}}" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">Caracteristicas</span>
              </a>
            </div>
          </div>
        </article>
        @endforeach
        {{-- Productos recientes --}}
      <section class="row">
        <div class="col-12 section-content">
          <h1 class="title">Productos Recientes</h1> 
        </div>
        
        @foreach( \App\Models\Producto::orderBy('created_at','DESC')->paginate(4) as $producto)
          @if($producto->foto->first() != null)
            <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
              <div class="card card-product h-100">
              <a href="{{route('productos.show', $producto->id)}}"><img class="card-img-top card-img-product" src="{{$producto->foto->first()->ruta}}" alt="Card image cap"></a>
                <div class="card-body">
                  <h5 class="card-title mb-3 card-title-product text-truncate">{{$producto->nombre}}</h5>
                  <div class="product-description">
                    <span class="mb-3">{{$producto->descripcion}}</span>
                  </div>
                  <p class="mb-0 text-truncate" style="font-size: 12px">publicado en: {{$producto->departamento->nombre}}</p>
                  @if($producto->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
                  <span class="badge badge-pill badge-success">{{$producto->tipo->nombre}}</span>
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
      </section>
    </div>
@endsection

@section('scriptJS')

@endsection