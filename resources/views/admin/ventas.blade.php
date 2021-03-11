@extends('layouts.admin')
@section('content')
<?php
    $no = false;
?>
<div class="container-fluid p-0 d-flex justify-content-between">
    <h2 class="m-0 p-0 title-content">Ventas</h2>
</div>

<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table" style="font-size: 13px">ID</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Usuario</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Producto ID</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Nombre Producto</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">ReferenceCode</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Reference_pol</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">TransactionId</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">lapTransactionState</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">TX_VALUE</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Currency</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">buyerEmail</th>
                <th class="border-top-0 text-title-table" style="font-size: 13px">Days</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ventas as $venta)
                <tr class="py-0">
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->id}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{\App\Models\User::find($venta->id)->name}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->producto_id}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{\App\Models\Producto::find($venta->producto_id)->nombre}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->referenceCode}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->referenceCode}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->transactionId}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->lapTransactionState}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->TX_VALUE}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->currency}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->buyerEmail}}</span></td>
                    <td class="text-table"  style="font-size: 13px"><span>{{$venta->days}}</span></td>
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

