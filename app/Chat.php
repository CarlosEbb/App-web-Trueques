<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Producto;

class Chat extends Model
{
    protected $table = "chat";
    protected $fillable = [
        'to_id', "user_id", "user_comprador_id", "producto_id", "mensaje", "event", "notificacion"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comprador()
    {
        return $this->belongsTo(User::class, 'user_comprador_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}