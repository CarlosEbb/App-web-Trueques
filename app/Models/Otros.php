<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otros extends Model
{
    use HasFactory;

    protected $table ='otros';

    
    protected $fillable = [
        'contenido',
        'producto_id',
        'user_id',
        'estrellas',
        'vendedor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
