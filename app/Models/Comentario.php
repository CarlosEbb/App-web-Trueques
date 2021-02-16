<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table ='comentarios';

    protected $fillable = [
        'contenido',
        'producto_id',
        'user_id',
        'estrellas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
