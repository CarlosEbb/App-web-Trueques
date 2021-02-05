@extends('layouts.admin')
@section('content')
<div class="container" style="min-height: 65vh;">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2 class="title">Mis cambios</h2>
    </div>
    <div class="col-12 mt-5">
      <ul class="list-unstyled">
        @forelse(Auth::user()->productos->where('status', 4) as $producto)
          <li class="media media-style">
            <img class="mr-3" src="@if($producto->foto->first() != null) {{$producto->foto->first()->ruta}} @endif" width="64" height="64" style="border-radius: 15px;" alt="">
            <div class="media-body">
              <h5 class="mt-0 mb-1 d-inline-block" style="width: 95%;">
                {{$producto->nombre}}
                <span class="badge badge-pill badge-success">finalizado</span>
              </h5>
              <a class="btn-rounded btn-rounded-delete btn-rounded-delete-hover tooltips d-inline-block" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">Cancelar</span>
              </a>
              <p> {{$producto->descripcion}}</p>
              <p class="text-muted">
                Este cambio fue realizado con:
                <a href="#" target="_blank" rel="noopener noreferrer">{{$producto->user->name}}</a>
              </p>
            </div>
          </li>
        @empty
          <h3 class="text-center" style="color: #737373;">Realiza tu primer cambio.</h3>
          <div class="d-flex justify-content-center aling-items-center mt-5">
            <img src="{{asset('img/shopping.svg')}}" width="412" alt="">
          </div>
        @endforelse   
      </ul>
    </div>
  </div>
</div>
@endsection