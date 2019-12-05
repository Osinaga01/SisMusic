<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    public function perfil() {
        return $this->hasOne('App\Perfil');
    }
    public function user() {
        return $this->hasOne('App\User');
    }
}
