<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //
    protected $table = 'inscripcions';
    protected $primaryKey= 'id';
    protected $fillable = [
    'fecha',
    'curso_id',
    'estudiante_id'
    ];
}
