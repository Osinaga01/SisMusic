<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temario extends Model
{
    //
    protected $table = 'temarios';
    protected $primaryKey= 'id';
    protected $fillable = [
    'titulo',
    'justificacion',
    'objetivo',
    'fecha_revision',
    'estado',
    'curso_id'
    ];
}
