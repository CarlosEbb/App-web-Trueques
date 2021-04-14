<html>

    <table>
        <thead>
        <tr>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO DEL USUARIO </b></th>
            <th align="center" style="border: 20px solid black;"><b>NOMBRE COMPLETO</b></th>
            <th align="center" style="border: 20px solid black;"><b>FECHA DE REGISTRO</b></th>
            <th align="center" style="border: 20px solid black;"><b>CALIFICACION</b></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($users as $user)
            <?php
                 $suma = 0;
                 $cantidadDeElementos = \App\Models\Comentario::where('vendedor_id',$user->id)->count();
                 if($cantidadDeElementos != 0){
                     foreach(\App\Models\Comentario::where('vendedor_id',$user->id)->get() as $numero){
                         $suma += $numero->estrellas;
                     }
                     $promedio = intval($suma / $cantidadDeElementos);
                 }else{
                     $promedio = 0;
                 }
            ?>
            <tr>
                <td align="center"  style="border: 20px solid black;">{{ $user->email }}</td>
                <td align="center"  style="border: 20px solid black;">{{ $user->name }}</td>
                <td align="center"  style="border: 20px solid black;">{{ $user->created_at->format('d/m/Y') }}</td>
                <td align="center"  style="border: 20px solid black;">{{$promedio}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>