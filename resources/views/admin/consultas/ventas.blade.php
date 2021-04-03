<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table"><b>FECHA DE PAGO(DESTACADOS)</b></th>
                <th class="border-top-0 text-title-table"><b>PAQUETE (VALOR)</b></th>
                <th class="border-top-0 text-title-table"><b>CORREO USUARIO</b></th>
                <th class="border-top-0 text-title-table"><b>CATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>SUBCATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>NOMBRE DEL PRODUCTO</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr class="py-0">
                    <tr>
                        <td class="text-table">{{$venta->created_at->format('d/m/Y')}}</td>
                        <td class="text-table">{{$venta->currency}}</td>
                        <td class="text-table">{{$venta->user->email}}</td>
                        <td class="text-table">@if($venta->producto->categoria1 != null) {{\App\Models\Categoria::find($venta->producto->categoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($venta->producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($venta->producto->subCategoria1)->nombre}} @endif</td>
                        <td class="text-table">{{$venta->user->name}}</td>
                    </tr>
                </tr>
            @endforeach
        </tbody>
    </table>  	
</div>