<?php

namespace App\Exports;

use App\Order;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class VentasExport implements FromView
{
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($fecha_inicio, $fecha_fin){
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    
    }

    public function view(): View
    {
        $ventas = Order::all();    
        if(($this->fecha_inicio != null)){
            $ventas = Order::all()->where('created_at', '>=', $this->fecha_inicio);
        }

        if(($this->fecha_fin != null)){
            $ventas = Order::all()->where('created_at', '<=', $this->fecha_fin);
        }

        
        return view('admin.exports.ventas', [
            'ventas' => $ventas,
        ]);
    

        
    }
    
}