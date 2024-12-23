<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movimientos';

    protected $fillable = [
        'observacion',
        'solicitud_id',
        'fecha',
        'tipomovimiento_id'
    ];
}
