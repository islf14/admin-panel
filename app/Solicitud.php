<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud';

    protected $fillable = [
        'solicitud',
        'fecha',
        'estadosolicitud_id',
        'tramite_id',
        'users_id'
    ];
}
