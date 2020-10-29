@extends('layouts.app')
@section('content')
 <div class="container">
   <div class="row mt-5">
    <div class="col-12">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-perfil-tab" data-toggle="pill" href="#pills-perfil" role="tab" aria-controls="pills-perfil" aria-selected="true">
            Editar perfil
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-imagen-de-peril-tab" data-toggle="pill" href="#pills-imagen-de-peril" role="tab" aria-controls="pills-imagen-de-peril" aria-selected="false">
            Imagen de perfil
          </a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-perfil" role="tabpanel" aria-labelledby="pills-perfil-tab">
          <form class="row">
            <div class="col-12 text-center mt-5">
              <h2 class="title">Editar perfil</h2>
            </div>
            <div class="col-12 mb-4">
              <div class="card card-border-radius p-4 p-md-5">
                <h4 class="mb-4">Información básica</h4>
      
                <label for="nombre">Nombre</label>
                <input class="input" type="text" placeholder="Nombre" name="nombre" id="nombre" value="">

                <label for="QuienSoy" class="mt-4">Quien soy</label>
                <textarea class="textarea" placeholder="Quien soy (Opcional)" name="QuienSoy" id="QuienSoy" cols="20" rows="5" value=""></textarea>
              </div>
            </div>
            <div class="col-12 mb-4">
              <div class="card card-border-radius p-4 p-md-5">
                <h4 class="mb-4">Información de contacto</h4>
      
                <label for="telefono">Número de télefono</label>
                <input class="input" type="text" placeholder="3001111300" name="telefono" id="telefono" value="">

                <label for="correo" class="mt-4">Correo electronico</label>
                <input class="input" type="text" placeholder="perez@gmail.com" name="correo" id="correo" value="">
              </div>
            </div>
            <div class="col-12">
              <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Guardar cambios</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="pills-imagen-de-peril" role="tabpanel" aria-labelledby="pills-imagen-de-peril-tab">
          <form class="row">
            <div class="col-12 text-center mt-5">
              <h2 class="title">Editar foto perfil</h2>
            </div>
            <div class="col-12 mb-4">
              <div class="card card-border-radius p-4 p-md-5">
                <h4 class="mb-4">Imagen de perfil</h4>
                
                <label for="nombre">Imagen</label>
                <input type="file" class="input form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
            <div class="col-12">
              <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Guardar cambios</button>
            </div>
          </form>
        </div>
      </div>
    </div>
   </div>
 </div> 
@endsection