<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table"><b>CORREO DEL USUARIO </b></th>
                <th class="border-top-0 text-title-table"><b>NOMBRE COMPLETO</b></th>
                <th class="border-top-0 text-title-table"><b>FECHA DE REGISTRO</b></th>
                <th class="border-top-0 text-title-table"><b>CALIFICACION</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="py-0">

                    <?php
                        $suma = 0;
                        $cantidadDeElementos = \App\Models\Comentario::where('user_id',$user->id)->count();
                        if($cantidadDeElementos != 0){
                            foreach(\App\Models\Comentario::where('user_id',$user->id)->get() as $numero){
                                $suma += $numero->estrellas;
                            }
                            $promedio = intval($suma / $cantidadDeElementos);
                        }else{
                            $promedio = 0;
                        }
                    ?>
                    <tr>
                        <td class="text-table">{{ $user->email }}</td>
                        <td class="text-table">{{ $user->name }}</td>
                        <td class="text-table">{{ $user->created_at->format('d/m/Y') }}</td>
                        <td class="text-table">{{$promedio}}</td>
                    </tr>
                </tr>
            @endforeach
        </tbody>
    </table>  	
</div>