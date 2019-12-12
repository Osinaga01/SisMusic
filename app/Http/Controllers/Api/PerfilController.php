<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PerfilController extends Controller
{
    public function selectPerfil(Request $req)
    {
        $perfil = DB::table('users')
                    ->join('perfils','perfils.user_id','=','users.id')
                    ->select('users.name as nombre','perfils.apellidos','users.email as correo','perfils.telefono')
                    ->where('users.email','=',$req->input('correo'))
                    ->get();
        //return response()->json("Datos",$curso);
        return response()->json(['data' => $perfil],200);
    }
}
