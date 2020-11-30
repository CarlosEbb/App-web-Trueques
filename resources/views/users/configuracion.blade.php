@extends('layouts.app')
@section('content')
  <div class="container" style="min-height: 63vh;">
    <div class="row mt-5">
    <div class="col-12">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-contraseña-tab" data-toggle="pill" href="#pills-contraseña" role="tab" aria-controls="pills-contraseña" aria-selected="true">
            Cambiar contraseña
          </a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-contraseña" role="tabpanel" aria-labelledby="pills-contraseña-tab">
        
          {!! Form::model(Auth::user(), ['route' => ['users.update', Auth::user()->id], 'method' => 'PUT', 'files' => true, 'class' => 'row']) !!}
            <div class="col-12 text-center mt-5">
              <h2 class="title">Contraseña</h2>
            </div>
            <div class="col-12 mb-4">
              <div class="card card-border-radius p-4 p-md-5">
              @foreach ( $errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{$error}}
                </div>
              @endforeach

              @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{Session::get('mensaje')}}
                </div>
              @endif
                <h4 class="mb-4">Ingrese la contraseña nueva</h4>
      
                <label for="Nuevacontraseña">Nueva contraseña</label>
                <input class="input" type="password" placeholder="Nueva contraseña" name="password" id="Nuevacontraseña" value="">

                <label for="contraseña" class="mt-4">Confirme la contraseña</label>
                <input class="input" type="password" placeholder="Contraseña" name="password_confirmation" id="contraseña" value="">
              </div>
            </div>
            <div class="col-12">
              <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Cambiar contraseña</button>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    </div>
  </div> 
@endsection