<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perfil() {
        return $this->hasOne('App\Perfil');
    }
    public function estudiante() {
        return $this->hasOne('App\Estudiante');
    }
    public function docente() {
        return $this->hasOne('App\Docente');
    }
    public function user()
    {
        return ('App\User');
    }

    public function setActivities()
    {
        $description = "Usted ha visitado la url: ".Request::url()." en fecha y hora: ".Carbon::now();
        Activity::create(['description' => $description,
                            'date' => date('Y-m-d'),
                            'user_id' => Auth()->id(),
                            'client_id' => Auth()->user()->client_id??Auth()->id()
            ]);
    }
    public function registerBinnacle()
    {
        $user = $this::find(Auth::id());
        $date = date('d-m-Y H:i:s');
        $path = public_path().'/binnacle'.'/binnacle.txt';
        $myfile = fopen($path, "a");
        $txt = "Fecha: ".$date." || ID: ".Auth()->id()." || Nombre: ".$user->name." ".$user->email." || IP: ".Request::ip()." || Url: "
        .Request::fullUrl();
        fwrite($myfile, "\n". $txt);
        fclose($myfile);
    }


    
      
}
