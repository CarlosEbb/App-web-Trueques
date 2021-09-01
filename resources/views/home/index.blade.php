@extends("layout.app")
@section("contenido")
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title d-block" id="ModalLabel_consejos">
                      <p class="d-block mb-0 mt-2">
                          <b>Consejos de Seguridad</b>
                      </p>
                  </h5>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                  <div class="modal-body">
                      
                    <p class="text-slogan">
                    •	Para hacer un trueque, se recomienda citarse con la otra persona en un lugar público y seguro (Ej: Centros Comerciales, cafés, restaurantes). <br><br>
                    •	A la hora del encuentro, antes de realizar el cambio, revisar detalladamente el producto a intercambiar para asegurarse de que esté en las condiciones descritas. <br><br>
                    •	No enviar información delicada como números de tarjeta de débito o crédito, códigos de seguridad u otros detalles bancarios. Recuerda: en Cambiémoslo no solicitamos nunca esta información. <br><br>
                    •	No compartir la dirección de residencia. <br><br>
                    •	Revisar la calificación y los comentarios de la persona con quién se hará el intercambio. <br><br>
                    •	De no estar seguro del estado de algún producto, solicitar más fotos o videos de este. <br><br>

                    </p>
                    
                    
                    <p class="text-slogan">
                    Cambiémoslo es una plataforma de intermediación que facilita la búsqueda y el contacto entre personas que desean intercambiar productos o servicios entre sí. Cambiémoslo no verifica de ninguna manera el proceso de trueque, así como el estado de los productos o transacciones. Todos los detalles del intercambio son acordados por los usuarios interesados. 
                    <br><br>
                    Estamos muy atentos a ayudar en la mayor medida posible a todos nuestros usuarios en temas de seguridad. Si llegan a sospechar o evidenciar cualquier forma de fraude pueden calificar y comentar en la cuenta del usuario, así como reportarnos directamente el incidente para que investiguemos y podamos tomar las medidas pertinentes. Recuerda que en Cambiémoslo protegemos los datos personales de nuestros usuarios, sin embargo, en caso de ser necesario, colaboraremos con las autoridades pertinentes en la entrega de información para resolver situaciones de fraude  
                    </p>

                      <div class="modal-footer">
                          <button type="button" class="btn-rounded btn-primary btn-primary-dark border-0" data-dismiss="modal">Aceptar</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>

<div class="mx-3 my-3" style="min-height: 75vh;">
    <div class="row d-flex justify-content-center ">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h2 class="title">Chat</h2>
                </div>
                <div class="col-md-4">
                    <div class="card card-border-radius content-chat" >
                    <ul class="p-0">
                        @forelse(\App\Chat::orderBy("created_at", "desc")->where('user_id', Auth::user()->id)->orwhere('user_comprador_id', Auth::user()->id)->get()->groupBy('event', 'producto_id') as $chats)
                            <?php
                                if(Auth::user()->id == $chats->first()->user_id){
                                    $toChat = $chats->first()->user_comprador_id;
                                }else{
                                    $toChat = $chats->first()->user_id;
                                }
                            ?>
         
                            <a href="{{route('chat')}}?p={{$chats->first()->producto_id}}&v={{$chats->first()->user_id}}&c={{$chats->first()->user_comprador_id}}" >
                                <li class="d-flex align-items-center border-bottom p-3 w-100"  @if($chats->first()->event == 'chat-event-'.$_GET["p"].'-'.$_GET["v"].'-'.$_GET["c"]) style="background: #f1f1f1;" @endif>
                                
                                    
                                        @if(Auth::user()->id == $chats->first()->user_comprador_id)
                                        <img @if(\App\Models\User::find($chats->first()->user_id)->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset(\App\Models\User::find($chats->first()->user_id)->foto)}}"  @endif class="rounded-circle"  width="50" alt="">
                                    <div class="content-info ml-3 ">
                                            <p class="mb-0"><b>{{$chats->first()->user->name}}</b> - {{\App\Models\Producto::find($chats->first()->producto_id)->nombre}}</p>
                                            <p class="small mb-0">{{$chats->last()->created_at}}</p>
                                            <p class="mb-0"><a href="{{route('publicaciones', $chats->first()->user_id)}}" style="font-size: 12px;">Ver productos</a></p>
                                        @endif
                                        
                                        @if(Auth::user()->id == $chats->first()->user_id)
                                        <img @if(\App\Models\User::find($chats->first()->user_comprador_id)->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset(\App\Models\User::find($chats->first()->user_comprador_id)->foto)}}"  @endif class="rounded-circle"  width="50" alt="">
                                    <div class="content-info ml-3 ">
                                            <p class="mb-0"><b>{{$chats->first()->comprador->name}}</b> - {{\App\Models\Producto::find($chats->first()->producto_id)->nombre}}</p>
                                            <p class="small mb-0">{{$chats->last()->created_at}}</p>   
                                            <p class="mb-0"><a href="{{route('publicaciones', $chats->first()->user_comprador_id)}}" style="font-size: 12px;">Ver productos</a></p>
                                        @endif
                                    </div>
                                </li>
                            </a>
                        @empty
                            <div class="card card-border-radius content-chat" >
                                <div class="content-info ml-3 ">
                                    <p class="mb-0">No hay nada para mostrar.</p>
                                    <p class="small mb-0"></p>                
                                </div>
                            </div>
                        @endforelse
                    </ul>
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

<script>
@if(\App\Chat::all()->where('event', 'chat-event-'.$_GET["p"].'-'.$_GET["v"].'-'.$_GET["c"].'')->count() == 0)
    $('.bd-example-modal-lg').modal('show');
@endif

@if(\App\Chat::all()->where('event', 'chat-event-'.$_GET["p"].'-'.Auth::user()->id.'-'.$_GET["c"].'')->count() == 1)
    $('.bd-example-modal-lg').modal('show');
@endif
    $('#livewire-error').hide();
</script>
@endsection