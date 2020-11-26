<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\NuevoMensaje;
use Auth;
use App\Models\Producto;
use App\Models\User;

class ChatForm extends Component
{
    // Estas propiedades son publicas
    // y se pueden utilizar directamente desde la vista
    public $usuario;
    public $mensaje;
    public $producto;
    public $comprador;
    public $usuarioNombre;
    public $productoNombre;
    public $compradorNombre;

    // Generar datos para pruebas
    private $faker;
    
    // Mantenemos estos valores actualizados en 
    // la barra de direcciones...
    // Ej.: https://your-app.com/?usuario=Pedro
    protected $updatesQueryString = ['usuario', 'producto', 'comprador', 'usuarioNombre', 'productoNombre', 'compradorNombre'];   
    
    // Eventos Recibidos
    protected $listeners = ['solicitaUsuario', 'solicitaProducto', 'solicitaComprador', 'solicitarMensajes', 'solicitaUsuarioNombre', 'solicitaProductoNombre', 'solicitaCompradorNombre'];

    // Cuando se Inicia el Componente (antes de Render)
    public function mount()
    {                
        $this->producto = $_GET['p'];
        $this->comprador = $_GET['c'];
        $this->usuario = $_GET['v'];

        $this->productoNombre = Producto::find($_GET['p'])->nombre;
        $this->compradorNombre = User::find($_GET['c'])->name;
        $this->usuarioNombre = User::find($_GET['v'])->name;

        // Instanciamos Faker
        //$this->faker = \Faker\Factory::create();       

        // Obtenemos el valor de usuario de la barra de direcciones
        // si no existe, generamos uno con Faker

        // Generamos el primer texto de prueba
        //$this->mensaje = $this->faker->realtext(20);
    }
    
    public function solicitarMensajes()
    {
        $this->emit('mensajeRecibido');
     
    }

    // Cuando el otro componente nos solicitan el usuario    
    public function solicitaUsuario()
    {
        // Lo emitimos por evento
        $this->emit('cambioUsuario', $this->usuario);
    }

    // Cuando actualizamos el nombre de usuario
    public function updatedUsuario()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioUsuario', $this->usuario);
    }

    public function solicitaProducto()
    {
        // Lo emitimos por evento
        $this->emit('cambioProducto', $this->producto);
    }

    public function updatedProducto()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioProducto', $this->producto);
    }

    public function solicitaComprador()
    {
        // Lo emitimos por evento
        $this->emit('cambioComprador', $this->comprador);
    }

    public function updatedComprador()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioComprador', $this->comprador);
    }

    public function solicitaProductoNombre()
    {
        // Lo emitimos por evento
        $this->emit('cambioProductoNombre', $this->productoNombre);
    }

    public function updatedProductoNombre()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioProductoNombre', $this->productoNombre);
    }

    public function solicitaUsuarioNombre()
    {
        // Lo emitimos por evento
        $this->emit('cambioUsuarioNombre', $this->usuarioNombre);
    }

    // Cuando actualizamos el nombre de usuarioNombre
    public function updatedUsuarioNombre()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioUsuarioNombre', $this->usuarioNombre);
    }
    
    public function solicitaCompradorNombre()
    {
        // Lo emitimos por evento
        $this->emit('cambioCompradorNombre', $this->compradorNombre);
    }

    public function updatedCompradorNombre()
    {
        // Notificamos al otro componente el cambio
        $this->emit('cambioCompradorNombre', $this->compradorNombre);
    }

    // Se produce cuando se actualiza cualquier dato por Binding
    public function updated($field)
    {
        // Solo validamos el campo que genera el update
        $validatedData = $this->validateOnly($field, [
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);
    }

   

    public function enviarMensaje()
    {                
        
        $validatedData = $this->validate([
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);

        // Guardamos el mensaje en la BBDD
        \App\Chat::create([
            "user_id" => $this->usuario,
            "user_comprador_id" => $this->comprador,
            "producto_id" => $this->producto,
            "mensaje" => $this->mensaje,
            "to_id" => Auth::user()->id,
        ]);
        
        // Generamos el evento para Pusher
        // Enviamos en la "push" el usuario y mensaje (aunque en este ejemplo no lo utilizamos)
        // pero nos vale para comprobar en PusherDebug (y por consola) lo que llega...
        event(new \App\Events\NuevoMensaje($this->usuario, $this->mensaje, $this->producto, $this->comprador));
        
        // Este evento es para que lo reciba el componente
        // por Javascript y muestre el ALERT BOOSTRAP de "enviado"
        $this->emit('enviadoOK', $this->mensaje);
        
        // Creamos un nuevo texto aleatorio (para el próximo mensaje)
        //$this->faker = \Faker\Factory::create();       
        $this->mensaje = '';
    
    }    

    public function render()
    {
        $producto = $this->producto;
        $vendedor = $this->usuario;
        $comprador = $this->comprador;

        return view('livewire.chat-form', compact('producto','vendedor', 'comprador'));
    }
}