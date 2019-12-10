<?php

namespace App\Http\Controllers\Administracion;
use App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-admin|role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
         $this->middleware('permission:ver-admin', ['only' => ['sismusic']]);
    }
    public function publicViewDashboard()
    {
        return view('public/cursos/lista');
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
