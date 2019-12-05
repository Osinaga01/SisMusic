<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfils';
    protected $primaryKey= 'id';
    protected $fillable = [
    'apellidos',
    'sexo',
    'foto',
    'telefono',
    'estado'
    ];

    public function user()
    {
        //return $this->hasOne('App\User');
        return $this->hasOne('App\User');
    }
    public function estudiante() {
        return $this->hasOne('App\Estudiante');
      }
}
