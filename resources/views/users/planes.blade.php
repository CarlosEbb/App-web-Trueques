@extends('layouts.app')
@section('content')
    <div class="container" style="min-height: 63.4vh;">
      <div class="row mt-3">
        <div class="col-12 text-center my-5">
          <h2 class="title">Realizar pago</h2>
          <h4 class="my-4 lead">Publica y destaca tu anuncio con la mejor plataforma de intercambio.</h4>
          <p>medio de pago <img src="{{asset('img/PayU.png')}}" width="100" alt=""></p>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-border-radius p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 5 dias</h5>
              <p class="name-product" style="font-size: 35px;">10.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              <a href="#" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">Destacar producto</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-3 my-md-0">
          <div class="card card-border-radius card-border-active p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 15 dias</h5>
              <p class="name-product" style="font-size: 35px;">20.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              <a href="#" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">Destacar producto</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-border-radius p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 30 dias</h5>
              <p class="name-product" style="font-size: 35px;">30.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              <a href="#" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">Destacar producto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection