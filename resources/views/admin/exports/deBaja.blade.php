<html>

    <table>
        <thead>
        <tr>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>FECHA DE BAJA PUBLICACION</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO USUARIO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>SUBCATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>NOMBRE DE PRODUCTO</b></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($productos as $producto)
            <tr>
                <td align="center" style="border: 20px solid black;">{{$producto->updated_at->format('d/m/Y')}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->user->email}}</td>
                <td align="center" style="border: 20px solid black;">@if($producto->categoria1 != null) {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($producto->subCategoria1)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">{{$producto->nombre}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>