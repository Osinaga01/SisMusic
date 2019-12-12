<?php

namespace App\Http\Controllers\Contenido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Temario;
use DB;
use Auth;

class TemarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Auth()->user()->registerBinnacle();

        $temario = DB::table('temarios')
                   ->join('cursos','cursos.id','=','temarios.curso_id')
                   ->select('cursos.nombre as nombre_curso','temarios.*')
                    ->get();
        
        return view('adm-contenido/temario/index',compact('temario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //dd($id);
        $curso = DB::table('cursos')
                    ->join('docentes','docentes.user_id','=','cursos.id_docente')
                    ->select('cursos.*')
                    ->where('docentes.user_id','=',$id)
                    ->get();
        return view('adm-contenido/temario/create',compact('curso'));
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
        $temario = new Temario;
        $temario->titulo          = $request->titulo;
        $temario->justicacion     = $request->justificacion;
        $temario->objetivo        = $request->objetivo;
        $temario->fecha_revision  = $request->fecha_revision;
        //$curso->imagen          = $request->imagen;
        $temario->estado          = 1;
        $temario->curso_id        = $request->curso_id;

        $temario->save();
        //dd($curso);
        //$curso->save();
        return redirect()->route('temarios.index');
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
        $curso = DB::table('cursos')
                ->join('docentes','docentes.user_id','=','cursos.id_docente')
                ->select('cursos.*')
                ->where('docentes.user_id','=',Auth::user()->id)
                ->get();
        $temario = Temario::findOrFail($id);
        //dd($curso);
        return view('adm-contenido/temario/edit', compact('temario','curso'));
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
        $temario                = Temario::find($id);
        $temario->titulo        = $request->titulo;
        $temario->justicacion   = $request->justificacion;
        $temario->objetivo      = $request->objetivo;
        $temario->fecha_revision= $request->fecha_revision;
        $temario->estado        = 1;
        $temario->curso_id      = $request->curso_id;

        // $image = $request->file('imagen');
        // $image->move('img', $image->getClientOriginalName());
        // $curso->imagen = $image->getClientOriginalName();
        $temario->update();
        return redirect()->route('temarios.index');
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
