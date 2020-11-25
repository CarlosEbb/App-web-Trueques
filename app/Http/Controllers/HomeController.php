<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ProductoFavorito;
use Session;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function busqueda(Request $request)
    {
        $nombre = $request->get('nombre');
        $productos = Producto::nombre($nombre)->paginate(5);
        
        return view('users.mostrarProductoCategoria')->with(compact('productos'));
    }
    
    public function prueba()
    {
        return view("home.index");
    }

    
    public function upload(Request $request)
    {
        
        $foto = $request->file("file");
        $extension = $foto->getClientOriginalExtension();
        $url = Storage::disk('productos')->put($foto->getFilename().".".$extension, File::get($foto));
        $request['foto'] = '/uploads/productos/'.$foto->getFilename().".".$extension;
       
        return $request['foto'];
    }
}
