<?php

namespace App\Http\Controllers\Administracion;
use App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cursos;
use DB;

class DashboardController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-admin|role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
         $this->middleware('permission:ver-admin', ['only' => ['sismusic']]);
         $this->middleware('permission:ver-cursos-adm', ['only' => ['adm']]);
         $this->middleware('permission:ver-seguridad', ['only' => ['adm']]);
    }
    public function publicViewDashboard()
    {
        $curso = DB::table('cursos')->where('estado','1')->get();
        return view('public/cursos/lista',compact('curso'));
    }

    public function detalleCurso($id)
    {
        //dd($id)
        $curso = DB::table('cursos')
        ->select('cursos.*')
        ->where('estado','=','1')
        ->where('cursos.id','=',$id)->get();
        //dd($curso);
        $temario = DB::select("SELECT temarios.*
                              FROM temarios, cursos
                              WHERE cursos.id = temarios.curso_id and cursos.id = $id");
        
        //for ($i=0; $i < count($temario) ; $i++) { 
        //    $tema = DB::table('temas')->where('status','=',1)
        //        ->where('temas.temario_id','=',$temario[$i]->id)->get();
        //    dd($tema);
                //dd($temario[$i]->id);
            //dd($l);
        //}
        //dd(count($temario));
        $categoriasConLista = array();
        for ($i=0; $i < count($temario) ; $i++) {
            $temas = DB::table('temas')
                ->where('status','=',1)
                ->where('temas.temario_id','=',$temario[$i]->id)->get();
                //dd($temas);
            $listaAux = array();
            for ($f=0; $f < count($temas) ; $f++) {
                $array = array(
                    'id'      => $temas[$f]->id,
                    'nombre'  => $temas[$f]->nombre,
                    'descripcion'  => $temas[$f]->descripcion,
                    'contenido' => $temas[$f]->contenido
                );

                array_push($listaAux,$array);
            }

            $array = array(
                'id'    => $temario[$i]->id,
                'titulo'  => $temario[$i]->titulo,
                //'imagen'  => $listaDeCategoriaproducto[$f]->imagen,
                'listas'=> $listaAux
            );

            array_push($categoriasConLista,$array);
        }
        //dd(['datos'=>json_decode(json_encode($categoriasConLista))]);
        return view('public/cursos/detallecurso',['datos'=>json_decode(json_encode($categoriasConLista)),'curso'=>$curso]);
    }


    public function adminViewDashboard()
    {
        return view('dasboard/layout/admin');
    }
    public function publicPiano()
    {
        return view('piano/piano');
    }
}
