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
        'sub_categoria_id',
        'municipio_id',
        'departamento_id',
        'user_id',
        'precio',
        'status',
        'tipo_id',
        'categoria1',
        'categoria2',
        'categoria3',
        'subCategoria1',
        'subCategoria2',
        'subCategoria3',
        'produc_especifico1',
        'produc_especifico2',
        'produc_especifico3',
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
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function subcategoria()
    {
        return $this->belongsTo(SubCategoria::class, 'sub_categoria_id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoAnuncio::class, 'tipo_id');
    }

    public function rango()
    {
        return $this->belongsTo(Precio::class, 'precio');
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
