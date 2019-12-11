<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //
    protected $table = 'tareas';
    protected $primaryKey= 'id';
    protected $fillable = [
    'titulo',
    'contenido',
    'requiere_archivo',
    'estado',
    'tema_id'
    ];
}
