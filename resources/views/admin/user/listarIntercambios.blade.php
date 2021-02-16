@extends('layouts.admin')
@section('content')
<?php
    $no = false;
?>
    <div class="container-fluid p-0 d-flex justify-content-between">
        <h2 class="m-0 p-0 title-content">Intercambios</h2>
        <div class="option-menu d-flex">

        </div>
    </div>


    <div class="panel-body mt-3">
        <table id="myTable"  class="table table-hover display">
            <thead>
                <tr>
                    <th class="border-top-0 text-title-table" >ID</th>
                    <th class="border-top-0 text-title-table" >Usuario(Cliente)</th>
                    <th class="border-top-0 text-title-table" >Usuario(Vendedor)</th>
                    <th class="border-top-0 text-title-table" >Producto</th>
                    <th class="border-top-0 text-title-table" >Estrellas</th>
                    <th class="border-top-0 text-title-table" >Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comentarios as $comentario)
                    <tr class="py-0">
                        <td class="text-table" ><span>{{$comentario->id}}</span></td>
                        <td class="text-table" ><span>{{$comentario->user->name}}</span></td>
                        <td class="text-table" ><span>{{\App\Models\Producto::find($comentario->producto_id)->user->name}}</span></td>
                        <td class="text-table" ><span>{{\App\Models\Producto::find($comentario->producto_id)->nombre}}</span></td>
                        <td class="text-table" ><span>@for($i = 1; $i <= $comentario->estrellas; $i++) ★ @endfor</span></td>
                        <td class="text-table" ><span>{{$comentario->created_at}}</span></td>

                        
                    </tr>

                    @empty
              
              <?php
                $no = true;
              ?>
            @endforelse
            </tbody>
        </table>  	

        @if($no == true)
            <div class="d-flex justify-content-center aling-items-center mt-5">
            <h3 class="text-center" style="color: #737373;">No hay nada para mostrar.</h3>
                <img src="{{asset('img/shopping.svg')}}" width="412" alt="">
            </div>
        @endif
    </div>


@endsection

