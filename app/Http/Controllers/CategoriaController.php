<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.listar')->with(compact('categorias'));
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
        'descripcion' => 'required|string'
        ]);
            
        if($request->img != null){
            $foto = $request->file("img");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('categorias')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto'] = '/uploads/categorias/'.$foto->getFilename().".".$extension;
        }
    
        $categorias = Categoria::create($request->all());
        
        Session::flash('mensaje','Registrado correctamente');
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
        dd(1);
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
        if($request->img != null){
            $foto = $request->file("img");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('categorias')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto'] = '/uploads/categorias/'.$foto->getFilename().".".$extension;
        }

        if($request->icono != null){
            $foto = $request->file("icono");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('iconos')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['icon'] = '/uploads/iconos/'.$foto->getFilename().".".$extension;
        }
        $categoria = Categoria::find($id);
        $categoria->fill($request->all())->save();
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
        $categorias = Categoria::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }
}
