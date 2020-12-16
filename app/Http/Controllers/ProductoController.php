<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Municipio;
use App\Models\Departamento;
use App\Models\Foto;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
use Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        

        return view('admin.productos.listar')->with(compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $this->validate(request(), [
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|string',
            'sub_categoria_id' => 'required|string',
            'precio' => 'required|string',
            'archivos' => 'required',
            //'categoria1' => 'required|string',
            //'subCategoria1' => 'required|string',
            'departamento' => 'required|string',
            'municipio' => 'required|string',
        ]);

        if($request->subCategoria1 == '-'){
            $request['categoria1'] = null;
            $request['subCategoria1'] = null;
        }

        if($request->subCategoria2 == '-'){
            $request['categoria2'] = null;
            $request['subCategoria2'] = null;
        }

        if($request->subCategoria3 == '-'){
            $request['categoria3'] = null;
            $request['subCategoria3'] = null;
        }
        
        $request['departamento_id'] = $request->departamento;
        $request['municipio_id'] = $request->municipio;
        $request['user_id'] = Auth::user()->id;

        $producto = Producto::create($request->all());
     
        foreach($request->archivos as $file){
            Foto::create(['ruta' => $file, 'producto_id' => $producto->id]);
        }

        Session::flash('mensaje','Registrado correctamente');
        
        if(Auth::user()->rol_id == '2'){
            return redirect('/');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listarProductosPorUsuario($id)
    {
        $users = User::find($id);
        return view('admin.user.listarProductosPorUsuario')->with(compact('users'));
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('users.mostrarProducto')->with(compact('producto'));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->fill($request->all())->save();
        Session::flash('mensaje','Actualizado correctamente');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Producto::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }

    public function busqueda(Request $request)
    {

        if($request->busqueda != null){
            $productos = Producto::nombre($request->busqueda)->get();

        }else{
            $productos = Producto::get();
        }
        
        if($request->municipio != null){
            $mun = Municipio::where('nombre', $request->municipio)->get();
            if($mun->count() >= 1){
                $productos = $productos->where('municipio_id',$mun->first()->id);
                
            }
        }

        if($request->categoria != null){
            $productos = $productos->where('categoria_id', $request->categoria);
        }

        if($request->subCategoria != null){
            $productos = $productos->where('sub_categoria_id', $request->subCategoria);
        }

        if(($request->precio_hasta != null) and ($request->precio_desde != null)){
            $productos = $productos->where('precio','>=', $request->precio_desde);
            $productos = $productos->where('precio','<=', $request->precio_hasta);
        }

        if($request->estado != null){
            //dd('estado');
        }

        if($request->publicado != null){
            if($request->publicado == 1){
                $productos = $productos->where('created_at','>=', date("Y-m-d H:i:s",strtotime(date('Y-m-d H:i:s')."- 1 days")));
            }
            if($request->publicado == 7){
                $productos = $productos->where('created_at','>=', date("Y-m-d H:i:s",strtotime(date('Y-m-d H:i:s')."- 7 days")));
            }
            if($request->publicado == 30){
                $productos = $productos->where('created_at','>=', date("Y-m-d H:i:s",strtotime(date('Y-m-d H:i:s')."- 30 days")));
            }
        }
        
        return view('users.mostrarProductoCategoria')->with(compact('productos'));
    }
}
