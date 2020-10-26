@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <h2>Consultar Usuarios</h2>
    </div>

    <div class="panel-body">
        <table id="myTable"  class="table table-striped table-hover  display">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Tipo de Usuario</th>
                    {{-- <th>Estatus</th>--}}
                    <th>Opciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}} {{$user->apellido}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->roles->nombre}}</td>
                        <td>
                        <a class="btn btn-default" data-toggle="modal" data-target="#editar_{{$user->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.8em" height="1.8em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.706 8.042l-2.332 2.332l-3.75-3.75l2.332-2.332a.999.999 0 0 1 1.414 0l2.336 2.336a.999.999 0 0 1 0 1.414zM2.999 17.248L13.064 7.184l3.75 3.75L6.749 20.998H3v-3.75zM16.621 5.044l-1.54 1.539l2.337 2.335l1.538-1.539l-2.335-2.335zm-1.264 5.935l-2.335-2.336L4 17.664V20h2.336l9.021-9.021z" fill="#F8AA46"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                        </a>

                        @if($user->id != Auth::user()->id)
                        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-default">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.8em" height="1.8em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M18 19a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V7H4V4h4.5l1-1h4l1 1H19v3h-1v12zM6 7v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V7H6zm12-1V5h-4l-1-1h-3L9 5H5v1h13zM8 9h1v10H8V9zm6 0h1v10h-1V9z" fill="#F8AA46"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            </button>                           
                        {!! Form::close() !!}
                        @endif
                        </td>
                    </tr>


                      <!-- Modal Editar-->
                      <div class="modal fade" id="editar_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$user->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-lato" id="ModalLabel_editar_{{$user->id}}">Actualizar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Nombre</label>
                                                <input class="form-control" type="text" name="nombre" value="{{$user->nombre}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Correo</label>
                                                <input class="form-control" type="text" name="email" value="{{$user->email}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="descripcion">Roles</label>
                                                <select class="form-control" name="rol_id" class="select">
                                                    @foreach( \App\Models\Rol::all() as $rol)
                                                    <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                                    @endforeach
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
                @endforeach
            </tbody>
        </table>  	
    </div>

    
<a class="pb-0 text-lato text-gris" data-toggle="modal" data-target="#crear">Nuevo
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.8em" height="1.8em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M7 12h4V8h1v4h4v1h-4v4h-1v-4H7v-1zM6 4h11a3 3 0 0 1 3 3v11a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H6z" fill="#F8AA46"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
</a>

 <!-- Modal Crear-->
 <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="ModalCrearLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-lato" id="ModalCrearLabel">Crear Nuevo Usuario  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                   
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" name="email" value="{{old('email')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Roles</label>
                            <select class="form-control" name="rol_id" class="select">
                                @foreach( \App\Models\Rol::all() as $rol)
                                <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" name="password" value="{{old('password')}}" required>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input class="btn btn-warning" type="submit" value="Crear">
                    </div>
                {!! Form::close() !!}
              
            </div>
        </div>
    </div>
@endsection

