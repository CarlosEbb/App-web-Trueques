<?php

namespace App;

use Alexo\LaravelPayU\Payable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Payable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referenceCode',
        'reference_pol',
        'transactionId',
        'lapTransactionState',
        'TX_VALUE',
        'currency',
        'buyerEmail',
        'user_id',
        'producto_id',
        'days',
    ];

    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id');
    }
}
