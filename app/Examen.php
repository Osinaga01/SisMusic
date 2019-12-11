<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    //
    protected $table = 'examens';
    protected $primaryKey= 'id';
    protected $fillable = [
    'nombre',
    'descripcion',
    'tiempo_inicio',
    'tiempo_fin',
    'estado',
    'tema_id'
    ];
}
