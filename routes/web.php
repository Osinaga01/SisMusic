<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('cursos/lista');
// });
// Route::get('/home', function () {
//     return view('cursos/lista');
// });
//Route::get('/home', 'HomeController@index')->name('home');





// Route::get('/adm', function () {
//     return view('dasboard/layout/admin');
// });

// Route::get('/sismusic', function () {
//     return view('dasboard/layout/public');
// });

Route::get('adm/roles', function () {
    return view('administracion/roles/index');
});
Route::get('/','Administracion\DashboardController@publicViewDashboard');
Route::get('/piano','Administracion\DashboardController@publicPiano');
Auth::routes();
//Rutas de redireccion de vistas a los distintos usuarios y accesos
Route::group(['middleware' => ['auth']], function() {
    
    Route::get('sismusic','Administracion\DashboardController@publicViewDashboard');
    Route::get('detalle/{id}','Administracion\DashboardController@detalleCurso');
    Route::get('adm','Administracion\DashboardController@adminViewDashboard');
    Route::resource('adm/roles','Administracion\RoleController');
    Route::resource('adm/users','Administracion\UserController');
    Route::resource('adm/docentes','Administracion\DocenteController');
    Route::resource('adm/cursos','Contenido\CursoController');
    Route::resource('adm/temarios','Contenido\TemarioController');
    Route::get('adm/tema/{id}','Contenido\TemarioController@create');





    





    Route::resource('adm/cursosprofesor','Contenido\CursoController');

    //Rutas Publicas
    Route::resource('public/perfil/{id}','Administracion\PerfilController');
    
    
    
});


// Route::get('/lista', function () {
//     return view('cursos/lista');
// });
// Route::get('/piano', function () {
//     return view('piano/piano');
// });
// Route::get('/piano1', function () {
//     return view('piano/index');
// });



