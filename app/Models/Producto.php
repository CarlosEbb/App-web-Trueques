<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table ='productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
        'municipio_id',
        'departamento_id',
        'user_id',
        'precio_id',
    ];

    public function foto()
    {
        return $this->hasMany(Foto::class, 'producto_id');
    }
}
