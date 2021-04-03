<?php

namespace App\Exports;

use App\Models\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductosExport implements FromView
{
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($fecha_inicio, $fecha_fin){
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    
    }


    public function view(): View
    {

        $productos = Producto::all();  
                 
        if(($this->fecha_inicio != null)){
            $productos = $productos->where('created_at', '>=', $this->fecha_inicio);
        }

        if(($this->fecha_fin != null)){
            $productos = $productos->where('created_at', '<=', $this->fecha_fin);
        }
        
       
        return view('admin.exports.productos', [
            'productos' => $productos
        ]);
        
        
    }
    
}