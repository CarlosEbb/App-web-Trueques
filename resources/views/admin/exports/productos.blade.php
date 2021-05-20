<html>

    <table>
        <thead>
        <tr>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO DEL USUARIO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>FECHA DE PUBLICACION</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>SUBCATEGORIA</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>NOMBRE DEL PRODUCTO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>RANGO DE PRECIO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>DEPARTAMENTO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>MUNICIPIO</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>1 CAMBIO POR: (CATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>1 CAMBIO POR: (SUBCATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>1 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>2 CAMBIO POR: (CATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>2 CAMBIO POR: (SUBCATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>2 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>3 CAMBIO POR: (CATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>3 CAMBIO POR: (SUBCATEGORIA)</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>3 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($productos as $producto)
            <tr>
                <td align="center" style="border: 20px solid black;">{{$producto->user->email}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->created_at->format('d/m/Y')}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->categoria->nombre}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->subcategoria->nombre}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->nombre}}</td>
                <td align="center" style="border: 20px solid black;">@if($producto->rango->hasta == -1) Mas de ${{number_format($producto->rango->de, 0, ",", ".")}} @else  De ${{number_format($producto->rango->de, 0, ",", ".")}} hasta ${{number_format($producto->rango->hasta, 0, ",", ".")}} @endif</td>
                <td align="center" style="border: 20px solid black;">{{$producto->departamento->nombre}}</td>
                <td align="center" style="border: 20px solid black;">{{$producto->municipio->nombre}}</td>
                <td align="center" style="border: 20px solid black;">@if($producto->categoria1 != null) {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->subCategoria1 != null) @if(\App\Models\SubCategoria::find($producto->subCategoria1)->nombre == 'Otros') {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @else {{\App\Models\SubCategoria::find($producto->subCategoria1)->nombre}} @endif @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->produc_especifico1 != null) {{$producto->produc_especifico1}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->categoria2 != null) {{\App\Models\Categoria::find($producto->categoria2)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->subCategoria2 != null) @if(\App\Models\SubCategoria::find($producto->subCategoria2)->nombre == 'Otros') {{\App\Models\Categoria::find($producto->categoria2)->nombre}} @else {{\App\Models\SubCategoria::find($producto->subCategoria2)->nombre}} @endif @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->produc_especifico2 != null) {{$producto->produc_especifico2}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->categoria3 != null) {{\App\Models\Categoria::find($producto->categoria3)->nombre}} @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->subCategoria3 != null) @if(\App\Models\SubCategoria::find($producto->subCategoria3)->nombre == 'Otros') {{\App\Models\Categoria::find($producto->categoria3)->nombre}} @else {{\App\Models\SubCategoria::find($producto->subCategoria3)->nombre}} @endif @endif</td>
                <td align="center" style="border: 20px solid black;">@if($producto->produc_especifico3 != null) {{$producto->produc_especifico3}} @endif</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>