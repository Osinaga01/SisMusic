<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    protected $table = 'docentes';
    protected $primaryKey= 'user_id';
    protected $fillable = [
    'codigo_profesor',
    'profecion',
    'especialidad_genero',
    'especialidad_instrumento',
    'estado'
    ];
    
    public function user()
    {
        //return $this->hasOne('App\User');
        return $this->hasOne('App\User');
    }
}
