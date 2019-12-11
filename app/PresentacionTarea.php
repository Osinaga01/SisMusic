<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresentacionTarea extends Model
{
    //
    protected $table = 'presentacion_tareas';
    protected $primaryKey= 'id';
    protected $fillable = [
    'fecha_hota',
    'contenido',
    'ruta_archivo',
    'estado',
    'estudiante_id',
    'tarea_id'
    ];
}
