<div class="">
    <!-- El Usuario -->
    <div class="card-header">
        
        @error("usuario") 
            <small class="text-danger">{{ $message }}</small> 
        @else 
            <small class="text-muted">Vendedor: {{$usuarioNombre}}</small> <br>
            <small class="text-muted">Producto: {{$productoNombre}}</small> <br>
            <small class="text-muted">Comprador:  {{$compradorNombre}}</small> <br>
        @enderror
    </div>
    <div class="card-body" style="height: 380px; overflow-y: auto;">
        @foreach($mensajes as $mensaje)       
        
            <div>
                @if($mensaje["recibido"])
                    {{-- <div class="alert alert-warning px-2 py-0" style="margin-right: 450px; color: #353535; background-color: #f1f1f1; border-color: #f1f1f1;">
                        <strong style="font-size: 14px;">{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                        <br><span class="text-muted" style="font-size: 14px;">{{$mensaje["mensaje"]}}</span>
                    </div> --}}
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="alert alert-warning px-2 py-0" style="color: #353535; background-color: #f1f1f1; border-color: #f1f1f1;">
                                <strong style="font-size: 14px;">{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                                <br><span class="text-muted" style="font-size: 14px;">{{$mensaje["mensaje"]}}</span>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- <div class="alert alert-info px-2 py-0" style="margin-left: 450px;">
                        <strong style="font-size: 14px;">{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                        <br><span class="text-muted" style="font-size: 14px;">{{$mensaje["mensaje"]}}</span>
                    </div> --}}
                    <div class="row d-flex justify-content-end">
                        <div class="col-12  col-md-7">
                            <div class="alert alert-info px-2 py-0" style="">
                                <strong style="font-size: 14px;">{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                                <br><span class="text-muted" style="font-size: 14px;">{{$mensaje["mensaje"]}}</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>        
        @endforeach 
        
    </div>   
    
    
    

</div>