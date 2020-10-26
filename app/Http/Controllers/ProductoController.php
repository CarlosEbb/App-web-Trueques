<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
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
        $image = $request->file('file');
        dd($image);

        $datos = $this->validate(request(), [
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|string',
            'precio_id' => 'required|string',
        ]);
        $request['user_id'] = Auth::user()->id;

        
        $producto = Producto::create($request->all());
           
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
}
