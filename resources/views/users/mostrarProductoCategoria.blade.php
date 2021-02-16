@extends('layouts.app')

@section('content')
    <div class="container mt-5">
      <section class="row">
        <div class="col-12 col-md-9">
          <div class="row m-0 p-0">
            @forelse($productos as $producto)
            @if($producto->foto->first() != null)
            <article class="col-12 px-sm-3 col-sm-6 col-md-4 mb-4 px-5 py-1">
              <div class="card card-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar btn-favorito" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$producto->id}}) @endauth">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $producto->id)->where('user_id', Auth::user()->id)->first() == null) fill="#25405f" @else fill="red" @endif @else fill="#25405f" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">favorito</span>
                  </a>
                  <a href="{{route('productos.show', $producto->id)}}">
                    <img class="card-img-top card-img-product" src="{{$producto->foto->first()->ruta}}" alt="Card image cap">
                  </a>
                  <div class="card-body">
                    <a href="{{route('productos.show', $producto->id)}}">
                      <h5 class="card-title mb-2 card-title-product text-truncate">{{ucfirst($producto->nombre)}}</h5>
                    </a>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-2" style="font-size: 14px">
                      {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16.71 5.29L19 3h-8v8l2.3-2.3c1.97 1.46 3.25 3.78 3.25 6.42c0 1.31-.32 2.54-.88 3.63c2.33-1.52 3.88-4.14 3.88-7.13c0-2.52-1.11-4.77-2.84-6.33z" fill="#25405f"/><path d="M7.46 8.88c0-1.31.32-2.54.88-3.63a8.479 8.479 0 0 0-3.88 7.13c0 2.52 1.1 4.77 2.84 6.33L5 21h8v-8l-2.3 2.3c-1.96-1.46-3.24-3.78-3.24-6.42z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>--}}
                      Cambio por: <br>@if($producto->produc_especifico1 != null) -{{ucfirst($producto->produc_especifico1)}} <br> @else <br> @endif
                                      @if($producto->produc_especifico2 != null) -{{ucfirst($producto->produc_especifico2)}} <br> @else <br> @endif
                                      @if($producto->produc_especifico3 != null) -{{ucfirst($producto->produc_especifico3)}} <br> @else <br> @endif
                      
                    </p>
                    <p class="mb-0 text-truncate d-flex aling-items-center mt-4" style="font-size: 14px">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg> 
                      {{ucwords(strtolower($producto->municipio->nombre))}}
                    </p>
                    
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