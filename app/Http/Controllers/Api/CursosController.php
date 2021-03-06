<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CursosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaCursos()
    {
        $curso = DB::table('cursos')
                    ->join('docentes','docentes.user_id','=','cursos.id_docente')
                    ->join('perfils','perfils.user_id','=','docentes.user_id')
                    ->join('users','users.id','=','perfils.user_id')
                    ->select('cursos.id','users.name as nombre_docente','perfils.apellidos as apellido_docente','cursos.nombre as nombre_curso','cursos.descripcion','cursos.fecha_inicio','cursos.fecha_fin')
                    ->get();
        //return response()->json("Datos",$curso);
        return response()->json(['data' => $curso],200);
    }
    public function selectTemarioCurso(Request $req)
    {
        $temario = DB::table('temarios')
                    ->join('cursos','cursos.id','=','temarios.curso_id')
                    ->select('temarios.*')
                    ->where('temarios.curso_id','=',$req->input('id'))
                    ->get();
        //return response()->json("Datos",$curso);
        return response()->json(['data' => $temario],200);
    }
    public function selectTemaTemario(Request $req)
    {
        $temario = DB::table('temarios')
                    ->join('cursos','cursos.id','=','temarios.curso_id')
                    ->select('temarios.*')
                    ->where('temarios.curso_id','=',$req->input('id'))
                    ->get();
        //return response()->json("Datos",$curso);
        return response()->json(['data' => $temario],200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
