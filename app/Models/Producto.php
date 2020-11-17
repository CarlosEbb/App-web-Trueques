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
        'precio',
        'status',
        'tipo_id',
    ];

    public function foto()
    {
        return $this->hasMany(Foto::class, 'producto_id');
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

    public function tipo()
    {
        return $this->belongsTo(TipoAnuncio::class, 'tipo_id');
    }

//scope
    public function scopeNombre($query, $nombre) {
    	if ($nombre) {
    		return $query->where('nombre','like',"%$nombre%");
    	}
    }
    
    public function scopeDescripcion($query, $descripcion) {
    	if ($descripcion) {
    		return $query->where('descripcion','like',"%$descripcion%");
    	}
    }
}
