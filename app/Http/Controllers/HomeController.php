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

    public function addFavoritos(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        
        if(ProductoFavorito::where('user_id', $request->user_id)->where('producto_id', $request->producto_id)->count() >= 1){
            $buscar = ProductoFavorito::where('user_id', $request->user_id)->where('producto_id', $request->producto_id)->first()->delete();
        }else{
            $producto = ProductoFavorito::create($request->all());
        }

        return $request->producto_id;
    }
    
    public function upload(Request $request)
    {
        
        $foto = $request->file("file");
        $extension = $foto->getClientOriginalExtension();
        $url = Storage::disk('public')->put($foto->getFilename().".".$extension, File::get($foto));
        $request['foto'] = $foto->getFilename().".".$extension;
       
        return $request['foto'];
    }
}
