<?php

namespace App\Http\Controllers\Contenido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use DB;
use App\Docente;
use Image;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //AGREGANDO LA ACCION A BITACORA
        Auth()->user()->registerBinnacle();

        $curso = DB::table('cursos')->get();
        return view('adm-contenido/cursos/index',compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = DB::table('users')
                    ->join('perfils','perfils.user_id','=','users.id')
                    ->join('docentes','docentes.user_id','=','perfils.user_id')
                    ->select('perfils.user_id as id','users.name as nombre')
                    ->get();
        return view('adm-contenido/cursos/create',compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso;
        $curso->nombre          = $request->nombre;
        $curso->descripcion     = $request->descripcion;
        $curso->fecha_inicio    = $request->fecha_inicio;
        $curso->fecha_fin       = $request->fecha_fin;
        $curso->nro_cupos       = $request->nro_cupos;
        //$curso->imagen          = $request->imagen;
        $curso->estado          = 1;
        $curso->id_docente      = $request->id_docente;

        $file = $request->file('imagen');
        $destinationPath = public_path().'/img/';
        $nombreimagen = uniqid().$file->getClientOriginalName();
        $file->move($destinationPath, $nombreimagen);
        $curso->imagen = '/img/'.$nombreimagen;

        // $image = $request->file('imagen');
        // $image->move('img', $image->getClientOriginalName());
        // $curso->imagen = $image->getClientOriginalName();
        $curso->save();
        //dd($curso);
        //$curso->save();
        return redirect()->route('cursos.index');
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
        $docente = DB::table('users')
                    ->join('perfils','perfils.user_id','=','users.id')
                    ->join('docentes','docentes.user_id','=','perfils.user_id')
                    ->select('perfils.user_id as id','users.name as nombre')
                    ->get();
        $curso = Curso::findOrFail($id);
        //dd($curso);
        return view('adm-contenido/cursos/edit', compact('docente','curso'));
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
        $curso                  = Curso::find($id);
        $curso->nombre          = $request->nombre;
        $curso->descripcion     = $request->descripcion;
        $curso->fecha_inicio    = $request->fecha_inicio;
        $curso->fecha_fin       = $request->fecha_fin;
        $curso->nro_cupos       = $request->nro_cupos;
        $curso->estado          = 1;
        $curso->id_docente      = $request->id_docente;

        $file = $request->file('imagen');
        $destinationPath = public_path().'/img/';
        $nombreimagen = uniqid().$file->getClientOriginalName();
        $file->move($destinationPath, $nombreimagen);
        $curso->imagen = '/img/'.$nombreimagen;

        // $image = $request->file('imagen');
        // $image->move('img', $image->getClientOriginalName());
        // $curso->imagen = $image->getClientOriginalName();
        $curso->update();
        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso          = Cursos::find($id);
        $curso->estado  = 0;
        $curso->update();
        return redirect()->route('cursos.index');
    }
}
