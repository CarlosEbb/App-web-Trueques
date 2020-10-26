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
                        {{--<td>
                            @if($user->status == true)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>--}}
                        <td>
                        @if($user->id != Auth::user()->id)
                        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-default">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.8em" height="1.8em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M18 19a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V7H4V4h4.5l1-1h4l1 1H19v3h-1v12zM6 7v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V7H6zm12-1V5h-4l-1-1h-3L9 5H5v1h13zM8 9h1v10H8V9zm6 0h1v10h-1V9z" fill="#F8AA46"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            </button>                           
                        {!! Form::close() !!}
                        @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  	
    </div>
@endsection

