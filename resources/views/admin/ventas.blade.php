@extends('layouts.admin')
@section('content')
<?php
    $no = false;
?>
<div class="container-fluid p-0 d-flex justify-content-between">
    <h2 class="m-0 p-0 title-content">Ventas</h2>
    <div class="option-menu d-flex">

    </div>
</div>

<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table">ID</th>
                <th class="border-top-0 text-title-table">Usuario</th>
                <th class="border-top-0 text-title-table">ReferenceCode</th>
                <th class="border-top-0 text-title-table">Reference_pol</th>
                <th class="border-top-0 text-title-table">TransactionId</th>
                <th class="border-top-0 text-title-table">lapTransactionState</th>
                <th class="border-top-0 text-title-table">TX_VALUE</th>
                <th class="border-top-0 text-title-table">Currency</th>
                <th class="border-top-0 text-title-table">buyerEmail</th>
                <th class="border-top-0 text-title-table">Days</th>
                <th class="border-top-0 text-title-table">Producto ID</th>
                <th class="border-top-0 text-title-table">Nombre Producto</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($ventas as $venta)
                <tr class="py-0">
                    <td class="text-table"><span>{{$venta->id}}</span></td>
                    <td class="text-table"><span>{{\App\Models\User::find($venta->id)->name}}</span></td>
                    <td class="text-table"><span>{{$venta->referenceCode}}</span></td>
                    <td class="text-table"><span>{{$venta->referenceCode}}</span></td>
                    <td class="text-table"><span>{{$venta->transactionId}}</span></td>
                    <td class="text-table"><span>{{$venta->lapTransactionState}}</span></td>
                    <td class="text-table"><span>{{$venta->TX_VALUE}}</span></td>
                    <td class="text-table"><span>{{$venta->currency}}</span></td>
                    <td class="text-table"><span>{{$venta->buyerEmail}}</span></td>
                    <td class="text-table"><span>{{$venta->days}}</span></td>
                    <td class="text-table"><span>{{$venta->producto_id}}</span></td>
                    <td class="text-table"><span>{{\App\Models\Producto::find($venta->producto_id)->nombre}}</span></td>
                    
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

