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

                    @forelse(\App\Chat::orderBy("created_at", "desc")->where('user_id', Auth::user()->id)->orwhere('user_comprador_id', Auth::user()->id)->get()->groupBy('chat-event') as $chats)
                        <div class="card card-border-radius content-chat" >
                            <a href="{{route('chat')}}?p={{$chats->first()->producto_id}}&v={{$chats->first()->user_id}}&c={{$chats->first()->user_comprador_id}}">
                                <div class="card-body d-flex align-items-center border-bottom p-3">
                                    <img @if(\App\Models\User::find($chats->first()->user_comprador_id)->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset(\App\Models\User::find($chats->first()->user_comprador_id)->foto)}}"  @endif class="rounded-circle"  width="50" alt="">
                                    <div class="content-info ml-3 ">
                                            
                                                @if(Auth::user()->id == $chats->first()->user_comprador_id)
                                                    <p class="mb-0"><b>{{$chats->first()->user->name}}</b> - {{$chats->first()->producto->nombre}}</p>
                                                    <p class="small mb-0">{{$chats->last()->created_at}}</p>
                                                @endif
                                                    
                                                @if(Auth::user()->id == $chats->first()->user_id)
                                                    <p class="mb-0"><b>{{$chats->first()->comprador->name}}</b> - {{$chats->first()->producto->nombre}}</p>
                                                    <p class="small mb-0">{{$chats->last()->created_at}}</p>   
                                                @endif
                                                    
                                    </div>
                                </div>
                            </a>
                        
                        </div>
                        @empty
                        <div class="card card-border-radius content-chat" >
                            <a>
                                <div class="card-body d-flex align-items-center border-bottom p-3">
                                    <div class="content-info ml-3 ">
                                        <p class="mb-0">No hay nada para mostrar.</p>
                                        <p class="small mb-0"></p>                
                                    </div>
                                </div>
                            </a>
                        
                        </div>
                        @endforelse
                    
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