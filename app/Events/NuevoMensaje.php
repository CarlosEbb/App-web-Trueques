<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Auth;
use App\Models\Producto;

class NuevoMensaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $usuario;
    public $mensaje;
    public $producto;
    public $comprador;

    public function __construct($usuario, $mensaje, $producto, $comprador)
    {
        $this->usuario = $usuario;
        $this->mensaje = $mensaje;
        $this->producto = $producto;
        $this->comprador = $comprador;
    }
    
    public function broadcastOn()
    {
        
        $user_id = Auth::user()->id;
        
        
        return ["chat-channel"];
    }

    public function broadcastAs()
    {
        
        
        return "chat-event-".$this->producto."-".$this->usuario."-".$this->comprador;
    }
}