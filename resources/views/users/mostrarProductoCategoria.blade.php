@extends('layouts.app')

@section('content')
    <div class="container mt-5">
      <section class="row">
        <div class="col-12 col-md-9">
          <div class="row m-0 p-0">
            @forelse($productos as $producto)
            @if($producto->foto->first() != null)
            <article class="col-12 px-sm-3 col-sm-6 col-md-4 mb-4 px-5 py-1">
              <div class="card card-product h-100">
              <a href="{{route('productos.show', $producto->id)}}"><img class="card-img-top card-img-product" src="{{$producto->foto->first()->ruta}}" alt="Card image cap"></a>
                <div class="card-body">
                  <h5 class="card-title mb-3 card-title-product text-truncate">{{$producto->nombre}}</h5>
                  <div class="product-description">
                    <span class="mb-3">{{$producto->descripcion}}</span>
                  </div>
                  <p class="mb-0" style="font-size: 12px">publicado en: {{$producto->departamento->nombre}}</p>
                  @if($producto->created_at->format('d-m-Y') == date('d-m-Y')) <span class="badge badge-pill badge-danger">Reciente</span>@endif
                </div>
                <div class="card-footer card-footer-product px-3 pb-3">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$producto->id}}) @endauth">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
            @empty
              <div class="d-flex justify-content-center aling-items-center mt-5">
              <h3 class="text-center" style="color: #737373;">No hay nada para mostrar.</h3>
                <img src="{{asset('img/shopping.svg')}}" width="412" alt="">
              </div>
            @endforelse

          </div>
        </div>
      </section>
    </div>
@endsection