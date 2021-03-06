<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('lista/cursos', 'Api\CursosController@listaCursos');
Route::get('lista/temarios', 'Api\CursosController@selectTemarioCurso');
Route::get('lista/temas', 'Api\CursosController@selectTemaTemario');
Route::get('perfil', 'Api\PerfilController@selectPerfil');
Route::get('cursos/inscrito', 'Api\CursosInscritoController@selectCursosInscrito');
