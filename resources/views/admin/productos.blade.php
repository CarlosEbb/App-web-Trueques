@extends('layouts.admin')
@section('content')

<div class="container-fluid p-0 d-flex justify-content-between">
    <h2 class="m-0 p-0 title-content">Productos Publicados por Categoria</h2>
    <div class="option-menu d-flex">
        
    </div>
</div>

<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table">Nombre</th>
                <th class="border-top-0 text-title-table">Descripcion</th>
                <th class="border-top-0 text-title-table">Usuario</th>
            </tr>
        </thead>
        <tbody>

            @foreach($categorias->productos as $producto)
                <tr class="py-0">
                    <td class="text-table"><span>{{$producto->nombre}}</span></td>
                    <td class="text-table"><span>{{$producto->descripcion}}</span></td>
                    <td class="text-table"><span>{{$producto->user->name}}</span></td>
                </tr>

            @endforeach
        </tbody>
    </table>  	
</div>
@endsection

