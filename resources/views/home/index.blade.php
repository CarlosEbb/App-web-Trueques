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
                            <?php
                                if(Auth::user()->id == $_GET['v']){
                                    $toChat = $_GET['c'];
                                }else{
                                    $toChat = $_GET['v'];
                                }
                            ?>
                            <a href="{{route('publicaciones', $toChat)}}">
                                <div class="card-body d-flex align-items-center border-bottom p-3">
                                    <img @if(\App\Models\User::find($_GET['c'])->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset(\App\Models\User::find($_GET['c'])->foto)}}"  @endif class="rounded-circle"  width="50" alt="">
                                    <div class="content-info ml-3 ">
                                            
                                                @if(Auth::user()->id == $_GET['c'])
                                                    <p class="mb-0"><b>{{\App\Models\User::find($_GET['v'])->name}}</b> - {{\App\Models\Producto::find($_GET["p"])->nombre}}</p>
                                                   
                                                @endif
                                                    
                                                @if(Auth::user()->id == $_GET['v'])
                                                    <p class="mb-0"><b>{{\App\Models\User::find($_GET['c'])->name}}</b> - {{\App\Models\Producto::find($_GET["p"])->nombre}}</p>
                                                      
                                                @endif
                                                    
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
                    
            setTimeout(
                function(){ 
                    $("#avisoSuccess").fadeOut("slow");
                    const $contentChat = document.getElementById('content-chat')
                    $contentChat.scrollTop = $contentChat.scrollHeight;
                }
            , 1000);                                
        });
    });
    
</script>

<script>
    
    // Enable pusher logging - don't include this in production
    setTimeout(function(){ window.livewire.emit('solicitaUsuario'); 
         const $contentChat = document.getElementById('content-chat')
        $contentChat.scrollTop = $contentChat.scrollHeight;
    }, 100);
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
        const $contentChat = document.getElementById('content-chat')
        $contentChat.scrollTop = $contentChat.scrollHeight;
    });
    
    
    $(document).ready(function(e){
        $('#vendedor').val('{{$_GET["v"]}}');
        $('#comprador').val('{{$_GET["c"]}}');
        $('#producto').val('{{$_GET["p"]}}');
    });


$('#file').on('change', function() {
    $('#buttonAdjuntar').trigger('click');

});

function clickFileInput(){
    $('#file').trigger('click');
}

const $contentChat = document.getElementById('content-chat')
$contentChat.scrollTop = $contentChat.scrollHeight;
</script>
@endsection