@extends('layouts.app')
@section('content')
    <div class="container" style="min-height: 100vh;">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <h2 class="title">Mis anuncios</h2>
        </div>
        <div class="col-12 my-5">
          <div class="row">
            <div class="col-12 col-md-3">
              <form action="">
                <input type="text" class="input" placeholder="buscar por nombre de producto">
              </form>
            </div>
            <div class="col-9">
              <div class="d-md-flex justify-content-center align-items-baseline">
                <p class="d-inline-block ml-5">Filtrar por: </p>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Ver todos (1)</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Anuncios activos (0)</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Anuncios inactivos (0)</button>
                <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill btn-sm ">Anuncios pendientes (0)</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div class="card shadow border-0 mb-3">
            <div class="row no-gutters">
              <div class="col-md-2">
                <img src="{{asset('img/telefono.jpg')}}" class="card-img card-img-anucios" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title mb-1">Telefono samsung</h5>
                  <h6 class="card-title mb-3"><small class="text-muted">Precio</small> 1.600.000 $ <span class="badge badge-pill badge-danger">No publicado</span></h6>

                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text mb-0">
                    <small class="text-muted">Publicado el <b>28/10/2020</b></small>
                  </p>
                </div>
                <div class="card-footer py-0 bg-transparent d-flex justify-content-end">
                  <button type="button" class="btn btn-outline-danger mx-2 mt-2 rounded-pill">Eliminar</button>
                  <button type="button" class="btn btn-outline-info mx-2 mt-2 rounded-pill">Editar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
@endsection