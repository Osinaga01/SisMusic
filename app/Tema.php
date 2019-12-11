<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $table = 'temas';
    protected $primaryKey= 'id';
    protected $fillable = [
    'nombre',
    'descripcion',
    'contenido',
    'status',
    'temario_id'
    ];
}
