@extends("layout.app")
@section("contenido")

<div class="mx-3 my-3" style="min-height: 75vh;">
    <div class="row d-flex justify-content-center ">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h2 class="title">Chat</h2>
                </div>
                <div class="col-md-4">
                    <div class="card card-border-radius content-chat" >
                        <a href="">
                            <div class="card-body d-flex align-items-center border-bottom p-3">
                                <img src="{{asset('img/avatar.png')}}" class="rounded-circle"  width="50" alt="">
                                <div class="content-info ml-3 ">
                                    <p class="mb-0"><b>Pedro perez</b></p>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-border-radius">
                        <div class="card-body px-0 pt-0">
                            @livewire("chat-list")
                        </div>
                        <div class="card-footer">
                            @livewire("chat-form")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("scriptJS")
<script>
    
    // Esto lo recibimos en JS cuando lo emite el componente
    // El evento "enviadoOK"
    $( document ).ready(function() {
        window.livewire.on('enviadoOK', function () {
            $("#avisoSuccess").fadeIn("slow");                
            setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);                                
        });
    });
    
</script>

<script>
    
    // Enable pusher logging - don't include this in production
    setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitaProducto'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitaComprador'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitaUsuarioNombre'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitaProductoNombre'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitaCompradorNombre'); }, 100);
    setTimeout(function(){ window.livewire.emit('solicitarMensajes'); }, 100);
    
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
        cluster: '{{env('PUSHER_APP_CLUSTER')}}',
        forceTLS: true
    });
    
    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event-{{$_GET['p']}}-{{$_GET['v']}}-{{$_GET['c']}}', function(data) {        
        window.livewire.emit('mensajeRecibido', data);
    });
    
</script>
@endsection