<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    protected $table = 'adjuntos';

    protected $fillable = [
        'nombre',
        'solicitud_id',
        'ruta',
        'oficina',
        'cargo',
        'fecha',
        'tipopersona_id',
        'formato_id',
        'users_id'
    ];
}
