<html>

    <table>
        <thead>
        <tr>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>FECHA DE PAGO(DESTACADOS)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>PAQUETE (VALOR)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO USUARIO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>SUBCATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>NOMBRE DEL PRODUCTO</b></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($ventas as $venta)
            <tr>
                <td align="center" style="border: 20px solid black;">{{$venta->created_at->format('d/m/Y')}}</td>
                <td align="center" style="border: 20px solid black;">{{$venta->currency}}</td>
                <td align="center" style="border: 20px solid black;">{{$venta->user->email}}</td>
                <td align="center" style="border: 20px solid black;">@if($venta->producto->categoria1 != null) {{\App\Models\Categoria::find($venta->producto->categoria1)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($venta->producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($venta->producto->subCategoria1)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">{{$venta->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>