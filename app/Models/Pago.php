<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
     protected $fillable = [
        'orden_id',
        'monto',
        'metodo_pago',
        'fecha_pago'

    ];
}
