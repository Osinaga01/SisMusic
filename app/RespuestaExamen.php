<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaExamen extends Model
{
    //
    protected $table = 'respuesta_examens';
    protected $primaryKey= 'id';
    protected $fillable = [
    'texto_respuesta',
    'ruta_archivo',
    'estado',
    'estudiante_id',
    'pregunta_examen_id'
    ];
}
