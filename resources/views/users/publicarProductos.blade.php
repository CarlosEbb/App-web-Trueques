@extends('layouts.app')

@section('content')
  <form action="" class="container px-0 px-md-5">
    <div class="row px-3  px-md-5">
      <div class="col-12 text-center mt-5">
        <h2 class="text-uppercase">publica tu producto</h2>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-content-form p-4 p-md-5">
          <h4 class="mb-4">Seleccionar categoria</h4>

          <label for="descripcion">Categorias</label>
          <select name="" id="" class="select">
            <option value="">Casa</option>
            <option value="">Moto</option>
            <option value="">Carro</option>
          </select>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-content-form p-4 p-md-5">
          <h4 class="mb-4">Detalles del anuncio</h4>
          <label for="nombreProducto">Nombre del producto</label>
          <input class="input" type="text" placeholder="Nombre del producto" name="" id="nombreProducto">

          <label for="descripcion" class="mt-4">Descripción</label>
          <textarea class="textarea" placeholder="Descripción" name="" id="descripcion" cols="20" rows="5"></textarea>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-content-form p-4 p-md-5">
          <h4 class="mb-4">Rango de precio</h4>

          <label for="descripcion">Precios</label>
          <select name="" id="" class="select">
            <option value="">De 0 a 10,000 pesos</option>
            <option value="">De 10,000 a 20,000 pesos</option>
            <option value="">De 20,000 a 40,000 pesos</option>
            <option value="">De 40,000 a 60,000 pesos</option>
            <option value="">De 60,000 a 100,000 pesos</option>
          </select>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card card-content-form p-4 p-md-5">
          <h4 class="mb-4">Adjuntar fotos del producto</h4>

        </div>
      </div>
        <div class="col-12 mb-4">
          <div class="card card-content-form p-4 p-md-5">
            <h4 class="mb-4">Confirma tu ubicación</h4>

            <label for="estado">Estado</label>
            <select name="" id="estado" class="select">
              <option value="">Amazonas</option>
              <option value="">Bogotá</option>
              <option value="">Boyacá</option>
            </select>

            <label for="ciudad" class="mt-4">Ciudad</label>
            <select name="" id="ciudad" class="select">
              <option value="">Bosa</option>
              <option value="">Candelaria</option>
              <option value="">Suba</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <button class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Publicar</button>
        </div>
      </div>
    </div>
  </form>
@endsection