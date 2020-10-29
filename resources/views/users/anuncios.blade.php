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

        @foreach(Auth::user()->productos as $producto)
        <div class="col-12 mb-3">
          <div class="card shadow border-0 mb-3">
            <div class="row no-gutters">
              <div class="col-md-2">
                <img src="@if($producto->foto->first() != null) {{$producto->foto->first()->ruta}} @endif" class="card-img card-img-anucios" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title mb-1">{{$producto->nombre}}</h5>
                  <h6 class="card-title mb-3"><small class="text-muted">Precio</small> De {{number_format($producto->precio->de, 2, ",", ".")}} a {{number_format($producto->precio->hasta, 2, ",", ".")}} {{$producto->precio->moneda->nombre}} 
                  @if($producto->status == true)
                    <span class="badge badge-pill badge-success">publicado</span></h6>
                  @else
                    <span class="badge badge-pill badge-danger">No publicado</span></h6>
                  @endif

                  <p class="card-text">{{$producto->descripcion}}</p>
                  <p class="card-text mb-0">
                    <small class="text-muted">Publicado el <b>{{$producto->created_at->format('d-m-Y')}}</b></small>
                  </p>
                </div>
                <div class="card-footer py-0 bg-transparent d-flex justify-content-end">
                  
                  {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
                      <button type="button" class="btn btn-outline-danger mx-2 mt-2 rounded-pill">Eliminar</button>
                  {!! Form::close() !!}
                  
                  <a class="btn btn-outline-info mx-2 mt-2 rounded-pill" data-toggle="modal" data-target="#editar_{{$producto->id}}">Editar</a>

                   <!-- Modal Editar-->
                  <div class="modal fade" id="editar_{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$producto->id}}" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title text-lato" id="ModalLabel_editar_{{$producto->id}}">Actualizar Producto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT', 'files' => true]) !!}
                                  <div>
                                     <div class="modal-body">
                                          <div class="form-group">
                                              <label for="">Nombre</label>
                                              <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="">Descripción</label>
                                              <textarea class="form-control" name="descripcion" cols="30" rows="10" required>{{$producto->descripcion}}</textarea>
                                          </div>
                                          
                                          <div class="form-group">
                                              <label for="">Categoría</label>
                                                <select name="categoria_id" class="select">
                                                  @foreach( \App\Models\Categoria::all() as $categoria)
                                                    <option value="{{$categoria->id}}" @if($producto->categoria_id == $categoria->id) selected @endif>{{$categoria->nombre}}</option>
                                                  @endforeach
                                                </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="">Rango de precio</label>
                                                <select name="precio_id" class="select" id="precio">
                                                  @foreach( \App\Models\Precio::all() as $precio)
                                                    <option value="{{$precio->id}}"  @if($producto->precio_id == $precio->id) selected @endif>De {{number_format($precio->de, 2, ",", ".")}} a {{number_format($precio->hasta, 2, ",", ".")}} {{$precio->moneda->nombre}}</</option>
                                                  @endforeach
                                                </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="">Estatus</label>
                                                <select name="status" class="select" id="precio">
                                                    <option value="1"  @if($producto->status == true) selected @endif>Publicado</</option>
                                                    <option value="0"  @if($producto->status == false) selected @endif>Pausado</</option>
                                                </select>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <input class="btn btn-warning" type="submit" value="Actualizar">
                                      </div>

                                  </div>
                              {!! Form::close() !!}
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
@endsection