@extends('layouts.admin')
@section('content')
  <div class="container" style="min-height: 63.4vh;">
    <div class="row">
      <div class="col-12 text-center mt-5">
        <h2 class="title">Mis favoritos</h2>
      </div>
      <div class="col-12 mt-5">
        <ul class="list-unstyled">
          @forelse(App\Models\ProductoFavorito::where('user_id', Auth::user()->id)->get() as $favorito)
            <li class="media media-style">
              <img class="mr-3" src="@if($favorito->producto->foto->first() != null) {{$favorito->producto->foto->first()->ruta}} @endif" width="64" height="64" style="border-radius: 15px;" alt="">
              <div class="media-body">
                <h5 class="mt-0 mb-0 d-inline-block" style="width: 90%;">{{$favorito->producto->nombre}}</h5>
                <a class="btn-rounded btn-rounded-chat tooltips d-inline-block" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 20.586L6.586 17H18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14.586zM3 22H2V6a3 3 0 0 1 3-3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H7l-4 4zM6 7h11v1H6V7zm0 3h11v1H6v-1zm0 3h8v1H6v-1z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">Chat</span>
                </a>
                {!! Form::open(['route' => ['favoritos.destroy', $favorito->id], 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
                <button class="btn-rounded btn-rounded-delete tooltips d-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">Eliminar</span>
                </button>
                {!! Form::close() !!}
                <h6 class="mt-0 mb-0"> De {{number_format($favorito->producto->precio->de, 2, ",", ".")}} a {{number_format($favorito->producto->precio->hasta, 2, ",", ".")}} {{$favorito->producto->precio->moneda->nombre}}</h6>
                <p class="text-muted mb-0">
                  <small>Publicado por:
                    <a href="#" target="_blank" rel="noopener noreferrer">{{$favorito->producto->user->name}}</a></small>
                </p>
              </div>
            </li>
          @empty
            <h3 class="text-center" style="color: #737373;">Agrega un producto a tu lista de favoritos.</h3>
            <div class="d-flex justify-content-center aling-items-center mt-5">
              <img src="{{asset('img/Onboarding.svg')}}" width="412" alt="">
            </div>
          @endforelse   
        </ul>
      </div>
    </div>
  </div>
@endsection