<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CursosInscritoController extends Controller
{
    public function selectCursosInscrito(Request $req)
    {

        $perfil = DB::table('cursos')
                    ->join('inscripcions','inscripcions.curso_id','=','cursos.id')
                    ->join('estudiantes','inscripcions.estudiante_id','=','estudiantes.user_id')
                    ->join('perfils','estudiantes.user_id','=','perfils.user_id')
                    ->join('users','perfils.user_id','=','users.id')
                    ->select('cursos.*')
                    ->where('users.email','=',$req->input('correo'))
                    ->orderBy('cursos.id','ASC')
                    ->get();
        //return response()->json("Datos",$curso);
        return response()->json(['data' => $perfil],200);
    }
}
