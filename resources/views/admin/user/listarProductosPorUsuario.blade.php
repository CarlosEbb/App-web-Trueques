@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0 d-flex justify-content-between">
        <h2 class="m-0 p-0 title-content">Usuarios</h2>
        <div class="option-menu d-flex">
            
        </div>
    </div>


    <div class="panel-body mt-3">
        <table id="myTable"  class="table table-hover display">
            <thead>
                <tr>
                    <th class="border-top-0 text-title-table" >Producto</th>
                    <th class="border-top-0 text-title-table" >Descripción</th>
                    <th class="border-top-0 text-title-table" >Categoria</th>
                    <th class="border-top-0 text-title-table" >Sub-categoria</th>
                    <th class="border-top-0 text-title-table" >Departamento</th>
                    <th class="border-top-0 text-title-table" >Municipio</th>
                    <th class="border-top-0 text-title-table" >Precio</th>
                    <th class="border-top-0 text-title-table" ></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users->productos as $producto)
                    <tr class="py-0">
                        <td class="text-table" ><span>{{$producto->nombre}}</span></td>
                        <td class="text-table" ><span>{{$producto->descripcion}}</span></td>
                        <td class="text-table" ><span>{{$producto->categoria->nombre}}</span></td>
                        <td class="text-table" ><span>{{$producto->subcategoria->nombre}}</span></td>

                        <td class="text-table" ><span>{{$producto->departamento->nombre}}</span></td>
                        <td class="text-table" ><span>{{$producto->municipio->nombre}}</span></td>
                        
                        <td class="text-table" ><span>{{$producto->precio}}</span></td>
                        <td class="d-flex justify-content-end border-0 py-0" >
                            <a class="btn btn-default tooltips action-items" data-toggle="modal" data-target="#editar_{{$producto->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            <span class="tooltiptext">Editar</span>
                            </a>
                                {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-default tooltips action-items">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                                <span class="tooltiptext">Eliminar</span>
                                    </button>                           
                                {!! Form::close() !!}
                        </td>
                    </tr>


                      <!-- Modal Editar-->
                      <div class="modal fade" id="editar_{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$producto->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title d-block" id="ModalLabel_editar_{{$producto->id}}">
                                        Actualizar Producto 
                                        <p class="d-block mb-0 mt-2">
                                            <b>{{$producto->nombre}}</b>
                                        </p>
                                    </h5>
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT', 'files' => true]) !!}
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
                                            


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-rounded btn-close border-0 bg-light" data-dismiss="modal">Cancelar</button>
                                            <input class="btn-rounded btn-primary btn-primary-dark border-0" type="submit" value="Actualizar">
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>  	
    </div>

@endsection

