<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($fecha_inicio, $fecha_fin){
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    
    }

    public function view(): View
    {

        $users = User::all();

        if(($this->fecha_inicio != null)){
            $users = $users->where('created_at', '>=', $this->fecha_inicio);
        }

        if(($this->fecha_fin != null)){
            $users = $users->where('created_at', '<=', $this->fecha_fin);
        }

        
        return view('admin.exports.users', [
            'users' => $users
        ]);
        
    }
    
}