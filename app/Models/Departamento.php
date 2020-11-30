<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table ='departamentos';

    public function municipio()
    {
        return $this->HasMany(Municipio::class ,'departamento_id');
    }
}
