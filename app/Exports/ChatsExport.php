<?php

namespace App\Exports;

use App\Chat;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ChatsExport implements FromView
{
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($fecha_inicio, $fecha_fin){
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    
    }

    public function view(): View
    {
        $chats = Chat::all();    

        if(($this->fecha_inicio != null)){
            $chats = $chats->where('created_at', '>=', $this->fecha_inicio);
        }

        if(($this->fecha_fin != null)){
            $chats = $chats->where('created_at', '<=', $this->fecha_fin);
        }
        
        $chats = $chats->groupBy('producto_id', 'user_id', 'user_comprador_id');

        return view('admin.exports.chats', [
            'chats' => $chats,
        ]);

    }
    
}