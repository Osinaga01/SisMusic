<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialApoyo extends Model
{
    //
    protected $table = 'material_apoyos';
    protected $primaryKey= 'id';
    protected $fillable = [
    'nombre',
    'tipo_material',
    'archivo tipo',
    'archivo_ruta',
    'link_ruta',
    'estado',
    'tema_id'
    ];
}
