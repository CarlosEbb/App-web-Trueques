@extends('layouts.app')

@section('content')
 
  <div class="container">
    <div class="row mt-5">
      <section class="col-12 col-md-8">
        <article class="card card-border-radius">
          <img src="https://via.placeholder.com/300x250" class="card-img-top card-img-rounded-top" alt="">
          <div class="content-img-product card-footer bg-transparent d-flex ">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
          </div>
        </article>
      </section>
      <section class="col-12 col-md-4">
        <div class="row">
          <article class="card card-border-radius p-3 col-12">
            <h3>$ 1.600.000</h3>
            <p>{{$producto->nombre}}</p>
            <span>Bogota / centro</span>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3>Descripción</h3>
            <p>{{$producto->descripcion}}</p>
            <span>Publicado el 20/30/2020</span>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3>Descripción del vendedor</h3>
            <div class="content-info-user d-flex">
              <img src="https://via.placeholder.com/50" width="50" class="rounded-circle" alt="">
              <div class="info-user">
                <p class="mb-1">Miguel Perez</p>
                <span>Miembro desde jun 2019</span>
              </div>
            </div>
            <button class=" mt-3 btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Chat</button>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3>Publicado en</h3>
            <span>Hipotecho Occidental, Kennedy, Bogotá</span>
            
          </article>
        </div>
      </section>
    </div>
  </div>
  <br>
 

@endsection