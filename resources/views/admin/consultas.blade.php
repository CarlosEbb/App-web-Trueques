@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0 d-flex justify-content-between">
        
        <div class="option-menu d-flex">
            <a class="text-table btn-menu tooltips" data-toggle="modal" data-target="#crear">
                
            </a>
        </div>
    </div>

    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('mensaje')}}
        </div>
    @endif
    
    <div class="panel-body mt-3">

    <div class="col-12 mb-4">
        <div class="card card-border-radius p-4 p-md-5">
          <h4 class="mb-4">Exportar Data</h4>
            <form class="row" action="{{route('exportarData')}}" method="POST">@csrf
                <div class="form-group col-12">                
                    <label for="">Tipo</label>
                    <select name="filtro" class="select">
                        <option value="1" @if($option == 1) selected @endif>Usuarios</option>
                        <option value="2" @if($option == 2) selected @endif>Productos</option>
                        <option value="3" @if($option == 3) selected @endif>Inicio de Chat</option>
                        <option value="4" @if($option == 4) selected @endif>Publicaciones dada de baja</option>
                        <option value="5" @if($option == 5) selected @endif>Ventas</option>
                    </select><br><br>
                </div>

                <div class="form-group col-6">
                    <label for="">Fecha Inicio</label>
                    <input class="input" type="date" value="{{$ini}}" name="fecha_inicio"><br><br>
                </div>

                <div class="form-group col-6">
                    <label for="">Fecha Fin</label>
                    <input class="input" type="date" @if(isset($fin)) value='{{date("Y-m-d",strtotime($fin."- 1 days"))}}' @endif name="fecha_fin"> 
                </div>

                <br><br>
                <input class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips col-2" type="submit" value="Consultar" name="accion">
                <input class="btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips col-2" type="submit" value="Exportar" name="accion">
              
            </form>

        </div>
      </div>

    
        @if($option == '1')
            @include('admin.consultas.usuarios', ['users' => $users])
        @endif
        
        @if($option == '2')
            @include('admin.consultas.productos', ['productos' => $productos])
        @endif

        @if($option == '3')
            @include('admin.consultas.chats', ['chats' => $chats])
        @endif

        @if($option == '4')
            @include('admin.consultas.deBaja', ['productos' => $productos])
        @endif

        @if($option == '5')
            @include('admin.consultas.ventas', ['ventas' => $ventas])
        @endif


    </div>

    
@endsection

