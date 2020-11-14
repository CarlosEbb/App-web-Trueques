<div class="">
    <!-- El Usuario -->
    <div class="card-header">
        <p wire:model="usuario" id="usuario" class="mb-0" >{{$usuario}}</p>
        @error("usuario") 
            <small class="text-danger">{{ $message }}</small> 
        @else 
            <small class="text-muted">Tu nombre: {{$usuario}}</small> 
        @enderror
    </div>
    <div class="card-body" style="height: 380px; overflow-y: auto;">
        @foreach($mensajes as $mensaje)         
            <div>
                @if($mensaje["recibido"])
                    <div class="alert alert-warning" style="margin-right: 50px;">
                        <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                        <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                    </div>
                @else
                    <div class="alert alert-success" style="margin-left: 50px;">
                        <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                        <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                    </div>
                @endif
            </div>        
        @endforeach 
    </div>   

    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
  
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });
        
        var channel = pusher.subscribe('chat-channel');
        
        channel.bind('chat-event', function(data) {            
            window.livewire.emit('mensajeRecibido', data);
        });
        
        setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    </script>

</div>