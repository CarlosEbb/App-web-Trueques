<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoFavorito extends Model
{
    use HasFactory;
    
    protected $table ='productos_favoritos';

    protected $fillable = [
        'user_id',
        'producto_id',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
