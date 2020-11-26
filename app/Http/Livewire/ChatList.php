<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class ChatList extends Component
{
    public $usuario;
    public $producto;
    public $comprador;
    public $usuarioNombre;
    public $productoNombre;
    public $compradorNombre;

    public $mensajes;
    protected $ultimoId;

        
    protected $listeners = ['mensajeRecibido', 'cambioUsuario', 'cambioProducto', 'cambioComprador', 'cambioUsuarioNombre', 'cambioProductoNombre', 'cambioCompradorNombre'];
    
    public function mount()
    {
        $ultimoId = 0;
        $this->mensajes = [];                       
        
        $this->usuario = request()->query('usuario', $this->usuario) ?? "";                   
    }

    public function mensajeRecibido()
    {        
        $this->actualizarMensajes();
    }

    public function cambioUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function cambioProducto($producto)
    {
        $this->producto = $producto;
    }

    public function cambioComprador($comprador)
    {
        $this->comprador = $comprador;
    }

    public function cambioUsuarioNombre($usuarioNombre)
    {
        $this->usuarioNombre = $usuarioNombre;
    }

    public function cambioProductoNombre($productoNombre)
    {
        $this->productoNombre = $productoNombre;
    }

    public function cambioCompradorNombre($compradorNombre)
    {
        $this->compradorNombre = $compradorNombre;
    }

    public function actualizarMensajes()
    {        
        
        
            // El contenido de la Push
            //$data = \json_decode(\json_encode($data));
            
            $this->mensajes = [];            
            $mensajes = \App\Chat::orderBy("created_at", "desc")->where('user_id',$this->usuario)->where('user_comprador_id',$this->comprador)->where('producto_id',$this->producto)->get();

            foreach($mensajes as $mensaje)
            {
                
                    $item = [
                        "id" => $mensaje->id,
                        "usuario" => $mensaje->usuario,
                        "mensaje" => $mensaje->mensaje,
                        "recibido" => ($mensaje->to_id == Auth::user()->id),
                        "fecha" => $mensaje->created_at->diffForHumans()
                    ];
    
                    array_unshift($this->mensajes, $item);                
                    //array_push($this->mensajes, $item);                
                
                
            }

            
            if(count($this->mensajes) > 60)
            {
                array_pop($this->mensajes);
            }
            
    }

    public function resetMensajes()
    {
        $this->mensajes = [];
        $this->actualizarMensajes();
    }

    public function dydrate()
    {
        if($this->usuario == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaUsuario');
        }

        if($this->producto == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaProducto');
        }

        if($this->comprador == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaComprador');
        }

        if($this->usuarioNombre == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaUsuarioNombre');
        }

        if($this->productoNombre == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaProductoNombre');
        }

        if($this->compradorNombre == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaCompradorNombre');
        }
    }

    public function render()
    {        
        return view('livewire.chat-list');
    }
}