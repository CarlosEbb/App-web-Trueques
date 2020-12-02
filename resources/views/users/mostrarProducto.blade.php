@extends('layouts.app')

@section('content')
 
  <div class="container">
    <div class="row mt-5">
      <section class="col-12 col-md-8">
        <div class="row px-1">
          <article class="card card-border-radius col-12 p-0">
            <img src="{{App\Models\Foto::where('producto_id', $producto->id)->first()->ruta}}" class="card-img-top card-img-rounded-top" id="foto-producto-src" width="250" height="512" alt="">
            <div class="content-img-product card-footer bg-transparent d-flex ">
              <?php           
                $consulta = App\Models\Foto::where('producto_id', $producto->id)->get();
              ?>
              @foreach($consulta->except(App\Models\Foto::where('producto_id', $producto->id)->first()->id) as $foto)
            <img src="{{$foto->ruta}}" width="90" class="rounded-lg mx-1 mt-2 fotos-productos-src" alt="">
              @endforeach
            </div>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción</h3>
            <p>{{$producto->descripcion}}</p>
            <span class="footer-product">Publicado el {{$producto->created_at->format('d-m-Y')}}</span>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3 h-50" style="max-height: 600px;">
            <h3 class="title-card-product">Comentarios</h3>
            <form class="form-inline justify-content-center mt-3" action="">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <input type="text" class="input w-75 mx-2" placeholder="Ingresa tu comentario">
              <button class="text-center btn-rounded btn-primary btn-primary-dark tooltips p-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.01 6.03l7.51 3.22l-7.52-1l.01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2l-15 2l.01 7L23 12L2.01 3z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              </button>
            </form>
            <ul class="list-unstyled px-5 mt-5 list-comentarios">
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
              <li class="media mb-4">
                <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-4.586l-3.707 3.707A1 1 0 0 1 8 21v-3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm13 1H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h4v4l4-4h5a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM5 7h13v1H5V7zm0 3h12v1H5v-1zm0 3h8v1H5v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <div class="media-body">
                  <h6 class="mt-0 mb-1 text-dark">List-based media object</h6>
                  <p class="text-secondary" style="font-size: 13px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </li>
            </ul>
          </article>
        </div>
      </section>
      <section class="col-12 col-md-4 mt-3 mt-md-0">
        <div class="row px-1 sticky-top">
          <article class="card card-border-radius card-border-active p-3 col-12">
            <h3 class="title-card-product">{{$producto->nombre}}</h3>
            <p class="name-product">$ {{$producto->precio}}</p>
            <span class="badge badge-pill badge-warning w-25">Destacado</span>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción del vendedor</h3>
            <div class="content-info-user d-flex">
              <img src="https://via.placeholder.com/50" width="50" height="60" class="rounded-circle mr-3" alt="">
              <div class="info-user">
                <p class="mb-1 font-weight-bold">{{$producto->user->name}}</p>
                <span class="footer-product">Miembro desde {{$producto->user->created_at->format('d-m-Y')}}</span>
                <form class="form-recomendaciones d-block">
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
                </form>
              </div>
            </div>
            <a @Auth href="{{route('chat')}}?p={{$producto->id}}&v={{$producto->user_id}}&c={{Auth::user()->id}}" @else href="{{route('login')}}" @endauth class=" mt-3 btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips"> <center>Chat</center></a>
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
            @if($articulo->foto->first() != null)
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product h-100">
            <img class="card-img-top card-img-product" src="{{$articulo->foto->first()->ruta}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-3 card-title-product text-truncate">{{$producto->nombre}}</h5>
                <div class="product-description">
                  <span class="mb-3">{{$producto->descripcion}}</span>
                </div>
                <p class="mb-0" style="font-size: 12px">publicado en: {{$articulo->departamento->nombre}}</p>
                <span class="badge badge-pill badge-warning">Destacado</span>
              </div>
              <div class="card-footer card-footer-product px-3 pb-3">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" @guest href="{{route('login')}}" @else onclick="addFavoritos({{$articulo->id}}) @endauth">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$articulo->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" @Auth @if(App\Models\ProductoFavorito::where('producto_id', $articulo->id)->where('user_id', Auth::user()->id)->first() == null) fill="#009fb7" @else fill="red" @endif @else fill="#009fb7" @endauth/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        </div>
      </section>
    </div>
  </div>
  <br>
@endsection