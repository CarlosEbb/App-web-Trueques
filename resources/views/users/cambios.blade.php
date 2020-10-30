@extends('layouts.app')
@section('content')
<div class="container" style="min-height: 100vh;">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2 class="title">Mis cambios</h2>
    </div>
    <div class="col-12 mt-5">
      <ul class="list-unstyled">
        <li class="media media-style">
          <img class="mr-3" src="{{asset('img/telefono.jpg')}}" width="64" height="64" style="border-radius: 15px;" alt="">
          <div class="media-body">
            <h5 class="mt-0 mb-1 d-inline-block" style="width: 95%;">
              List-based media object
              <span class="badge badge-pill badge-success">finalizado</span>
            </h5>
            <a class="btn-rounded btn-rounded-delete btn-rounded-delete-hover tooltips d-inline-block" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <span class="tooltiptext">Cancelar</span>
            </a>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p class="text-muted">
              Este cambio fue realizado con:
              <a href="#" target="_blank" rel="noopener noreferrer">Miguel Perez</a>
            </p>
          </div>
        </li>
        <li class="media media-style">
          <img class="mr-3" src="{{asset('img/telefono.jpg')}}" width="64" height="64" style="border-radius: 15px;" alt="">
          <div class="media-body">
            <h5 class="mt-0 mb-1 d-inline-block" style="width: 95%;">
              List-based media object
              <span class="badge badge-pill badge-danger">cancelado</span>
            </h5>
            <a class="btn-rounded btn-rounded-delete btn-rounded-delete-hover tooltips d-inline-block" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <span class="tooltiptext">Cancelar</span>
            </a>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p class="text-muted">
              Este cambio fue realizado con:
              <a href="#" target="_blank" rel="noopener noreferrer">Miguel Perez</a>
            </p>
          </div>
        </li>
        <li class="media media-style">
          <img class="mr-3" src="{{asset('img/telefono.jpg')}}" width="64" height="64" style="border-radius: 15px;" alt="">
          <div class="media-body">
            <h5 class="mt-0 mb-1 d-inline-block" style="width: 95%;">
              List-based media object
              <span class="badge badge-pill badge-danger">cancelado</span>
            </h5>
            <a class="btn-rounded btn-rounded-delete btn-rounded-delete-hover tooltips d-inline-block" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
              <span class="tooltiptext">Cancelar</span>
            </a>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p class="text-muted">
              Este cambio fue realizado con:
              <a href="#" target="_blank" rel="noopener noreferrer">Miguel Perez</a>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection