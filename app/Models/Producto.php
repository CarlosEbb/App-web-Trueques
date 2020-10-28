<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth; 

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

    public function precio()
    {
        return $this->belongsTo(Precio::class, 'categoria_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id', 'id_departamento');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

}
