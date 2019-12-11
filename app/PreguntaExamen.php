<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaExamen extends Model
{
    //
    protected $table = 'pregunta_examens';
    protected $primaryKey= 'id';
    protected $fillable = [
    'enunciado',
    'ponderacion',
    'requiere_archivo',
    'estado',
    'examen_id'
    ];
}
