<?php

namespace App\Exports;

use App\Models\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DeBajaExport implements FromView
{
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($fecha_inicio, $fecha_fin){
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    
    }

    public function view(): View
    {

        $productos = Producto::all()->where('status', 0);    

        if(($this->fecha_inicio != null)){
            $productos = $productos->where('updated_at', '>=', $this->fecha_inicio);
        }

        if(($this->fecha_fin != null)){
            $productos = $productos->where('updated_at', '<=', $this->fecha_fin);
        }
        
        $productos = $productos->where('status', 0);    

   
        return view('admin.exports.deBaja', [
            'productos' => $productos,
        ]);
    
    }
}