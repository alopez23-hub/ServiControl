<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenServicio extends Model
{
     protected $fillable = [
        'cliente_id',
        'servicio:id',
        'telefono_id',
        'fecha_solicitud',
        'estado',
        'notas'
    ];
}
