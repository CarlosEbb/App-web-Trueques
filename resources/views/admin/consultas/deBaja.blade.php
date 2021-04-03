<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table"><b>FECHA DE BAJA PUBLICACION</b></th>
                <th class="border-top-0 text-title-table"><b>CORREO USUARIO</b></th>
                <th class="border-top-0 text-title-table"><b>CATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>SUBCATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>NOMBRE DE PRODUCTO</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="py-0">
                    <tr>
                        <td class="text-table">{{$producto->updated_at->format('d/m/Y')}}</td>
                        <td class="text-table">{{$producto->user->email}}</td>
                        <td class="text-table">@if($producto->categoria1 != null) {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($producto->subCategoria1)->nombre}} @endif</td>
                        <td class="text-table">{{$producto->nombre}}</td>
                    </tr>
                </tr>
            @endforeach
        </tbody>
    </table>  	
</div>