<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoUserClick extends Model
{
    use HasFactory;

    protected $table ='producto_user_click';

    protected $fillable = [
        'user_id',
        'producto_id',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
