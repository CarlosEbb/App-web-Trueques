@extends('layouts.admin')
@section('content')

<div class="container-fluid p-0 d-flex justify-content-between">
    <h2 class="m-0 p-0 title-content">Sub-Categorias - {{$categorias->nombre}}</h2>
    <div class="option-menu d-flex">
        <a class="text-table btn-menu tooltips" data-toggle="modal" data-target="#crear">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.49 2 2 6.49 2 12s4.49 10 10 10s10-4.49 10-10S17.51 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="title-icon">Crear sub-categoria</span>
            <span class="tooltiptext">Crear sub-categoria</span>
        </a>
    </div>
</div>

<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table">Nombre</th>
                <th class="border-top-0 text-title-table">Descripción</th>
                <th class="border-top-0 text-title-table"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias->subCategoria as $categoria)
                <tr class="py-0">
                    <td class="text-table"><span>{{$categoria->nombre}}</span></td>
                    <td class="text-table"><span>{{$categoria->descripcion}}</span></td>
                    <td class="d-flex justify-content-end py-0">
                        <a class="btn btn-default tooltips action-items" data-toggle="modal" data-target="#editar_{{$categoria->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            <span class="tooltiptext">Editar</span>
                        </a>

                        {!! Form::open(['route' => ['subcategorias.destroy', $categoria->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-default tooltips action-items">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                                <span class="tooltiptext">Eliminar</span>
                            </button>                           
                        {!! Form::close() !!}
                    </td>
                </tr>

                <!-- Modal Editar-->
                <div class="modal fade" id="editar_{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$categoria->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-lato" id="ModalLabel_editar_{{$categoria->id}}">Actualizar Categoria <b>{{$categoria->nombre}}</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {!! Form::model($categoria, ['route' => ['subcategorias.update', $categoria->id], 'method' => 'PUT', 'files' => true]) !!}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="" class="d-block">Nombre</label>
                                        <input class="input" type="text" name="nombre" value="{{$categoria->nombre}}" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="d-block" >Descripcion</label>
                                        <input type="text" name="descripcion" class="input" value="" required>
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

 <!-- Modal Crear-->
 <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="ModalCrearLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-lato" id="ModalCrearLabel">Crear Nueva Sub-categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'subcategorias.store', 'files' => true]) !!}
                   
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="d-block">Nombre</label>
                            <input type="text" name="nombre" class="input" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="d-block" >Descripción</label>
                            <input type="text" name="descripcion" class="input" value="">
                        </div>

                        <div class="form-group" hidden>
                            <label for="" class="d-block" >id</label>
                            <input type="text" name="categoria_id" class="input" value="{{$categorias->id}}" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-close border-0 bg-light" data-dismiss="modal">Cancelar</button>
                        <input class="btn-rounded btn-primary btn-primary-dark border-0" type="submit" value="Crear categoria">
                    </div>
                {!! Form::close() !!}
              
            </div>
        </div>
    </div>



@endsection

