@extends('layouts.app')

@section('content')
    <div class="container mt-5">
      <section class="row">
        {{-- sidebar Filtrar productos desktop --}}
        <div class="col-12 col-md-3 d-none d-md-block" style="min-height: 100vh;">
          <h5 class="border-bottom py-2 text-body">Filtrar busqueda</h5>
          <div class="accordion" id="accordionExample">
            <div class="card border-0 border-bottom">
              <div class="card-header pl-1 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left text-uppercase text-body font-waight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                      rango de precio
                    </b>
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    @foreach( \App\Models\Precio::all() as $precio)
                            <a href="#" class="d-block text-uppercase py-1">{{number_format($precio->de, 2, ",", ".")}} a {{number_format($precio->hasta, 2, ",", ".")}} {{$precio->moneda->nombre}}</a>
                    @endforeach

                </div>
              </div>
            </div>
            <div class="card border-0 border-bottom">
              <div class="card-header pl-1 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed text-uppercase text-body" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <b>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                        localidad
                      </b>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                @foreach( \App\Models\Departamento::all() as $ciudad)
                    <a href="" class="d-block text-uppercase py-1">{{$ciudad->departamento}}</a>
                @endforeach    
              </div>
            </div>
          </div>
        </div>
        {{-- sidebar Filtrar productos movil --}}
        <div class="col-12 col-md-3 d-block d-md-none">
          <div class="accordion" id="accordionExample">
            <div class="card border-0">
              <div class="card-header bg-transparent border-0" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left border-0" type="button" data-toggle="collapse" data-target="#collapseMenuMovil" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="border-bottom py-2 text-body">Filtrar busqueda</h5>
                  </button>
                </h2>
              </div>
          
              <div id="collapseMenuMovil" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="accordion" id="accordionExample">
                    <div class="card border-0 border-bottom">
                      <div class="card-header pl-1 bg-transparent" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left text-uppercase text-body font-waight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                              rango de precio
                            </b>
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach( \App\Models\Precio::all() as $precio)
                                    <a href="#" class="d-block text-uppercase py-1">{{number_format($precio->de, 2, ",", ".")}} a {{number_format($precio->hasta, 2, ",", ".")}} {{$precio->moneda->nombre}}</a>
                            @endforeach
                        </div>
                      </div>
                    </div>
                    <div class="card border-0 border-bottom">
                      <div class="card-header pl-1 bg-transparent" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed text-uppercase text-body" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <b>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                                localidad
                              </b>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach( \App\Models\Departamento::all() as $ciudad)
                                <a href="" class="d-block text-uppercase py-1">{{$ciudad->departamento}}</a>
                            @endforeach    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-9">
          <div class="row m-0 p-0">
            @foreach($productos as $producto)
            @if($producto->foto->first() != null)
            <article class="col-12 px-sm-3 col-sm-6 col-md-4 mb-4 px-5 py-1">
              <div class="card card-product">
              <img class="card-img-top card-img-product" src="\uploads\{{$producto->foto->first()->ruta}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title mb-5 card-title-product">{{$producto->nombre}}</h5>
                  <div class="card-footer card-footer-product">
                    <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$producto->id}}) @endauth">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">favorito</span>
                  </a>
                  <a href="{{route('productos.show', $producto->id)}}" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">producto</span>
                  </a>
                  </div>
                </div>
              </div>
            </article>
            @endif
            @endforeach

          </div>
        </div>
      </section>
    </div>
@endsection