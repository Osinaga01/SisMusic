<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $table = 'estudiantes';
    protected $primaryKey= 'user_id';
    protected $fillable = [
    'fecha_enrrolado',
    'codigo_estudiante',
    'estado'
    ];
    public function perfil() {
        return $this->hasOne('App\Perfil');
    }
    public function user() {
        return $this->hasOne('App\User');
    }
}
