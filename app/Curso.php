<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey= 'id';
    protected $fillable = [
    'nombre',
    'descripcion',
    'fecha_inicio',
    'fecha_fin',
    'nro_cupos',
    'imagen',
    'estado',
    'id_docente'
    ];
    
}
