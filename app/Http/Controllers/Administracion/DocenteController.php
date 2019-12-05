<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('SELECT users.name, perfils.apellidos, users.email
                             FROM users, perfils, docentes
                                WHERE users.id = perfils.user_id and perfils.user_id = docentes.user_id');
                                
                // ->join('perfils','perfils.id_user','=','users.id')
                // ->join('docentes','docente.uder_id','=','perfils.user_id')
                // ->select('users.nombre as nombre','perfil.apellidos as apellido','users.email, email')
                // ->where('users.id','=','perfils.user_id','and','perfils.user_id','=','docentes.user_id');
                dd($data);
                
        //return view('administracion.asignar-docente.index',compact('data'));


//         SELECT users.name, perfils.apellidos, users.email
// FROM users, perfils, docentes
// WHERE users.id = perfils.user_id and perfils.user_id = docentes.user_id
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
