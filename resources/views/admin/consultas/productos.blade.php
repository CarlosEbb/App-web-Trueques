<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table"><b>CORREO DEL USUARIO</b></th>
                <th class="border-top-0 text-title-table"><b>FECHA DE PUBLICACION</b></th>
                <th class="border-top-0 text-title-table"><b>CATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>SUBCATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>NOMBRE DEL PRODUCTO</b></th>
                <th class="border-top-0 text-title-table"><b>RANGO DE PRECIO</b></th>
                <th class="border-top-0 text-title-table"><b>DEPARTAMENTO</b></th>
                <th class="border-top-0 text-title-table"><b>MUNICIPIO</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="py-0">
                    <tr>
                        <td class="text-table">{{$producto->user->name}}</td>
                        <td class="text-table">{{$producto->created_at->format('d/m/Y')}}</td>
                        <td class="text-table">{{$producto->categoria->nombre}}</td>
                        <td class="text-table">{{$producto->subcategoria->nombre}}</td>
                        <td class="text-table">{{$producto->nombre}}</td>
                        <td class="text-table">@if($producto->rango->hasta == -1) Mas de ${{number_format($producto->rango->de, 0, ",", ".")}} @else  De ${{number_format($producto->rango->de, 0, ",", ".")}} hasta ${{number_format($producto->rango->hasta, 0, ",", ".")}} @endif</td>
                        <td class="text-table">{{$producto->departamento->nombre}}</td>
                        <td class="text-table">{{$producto->municipio->nombre}}</td>
                        <td class="text-table">@if($producto->categoria1 != null) {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($producto->subCategoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico1 != null) {{$producto->produc_especifico1}} @endif</td>
                        <td class="text-table">@if($producto->categoria2 != null) {{\App\Models\Categoria::find($producto->categoria2)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria2 != null) {{\App\Models\SubCategoria::find($producto->subCategoria2)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico2 != null) {{$producto->produc_especifico2}} @endif</td>
                        <td class="text-table">@if($producto->categoria3 != null) {{\App\Models\Categoria::find($producto->categoria3)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria3 != null) {{\App\Models\SubCategoria::find($producto->subCategoria3)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico3 != null) {{$producto->produc_especifico3}} @endif</td>
                    </tr>
                </tr>
            @endforeach
        </tbody>
    </table>  	
</div>