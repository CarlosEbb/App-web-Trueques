<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chat";
    protected $fillable = [
        'to_id', "user_id", "user_comprador_id", "producto_id", "mensaje"
    ];
}