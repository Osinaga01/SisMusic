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

Route::get('/', function () {
    return view('cursos/lista');
});
// Route::get('/home', function () {
//     return view('cursos/lista');
// });
//Route::get('/home', 'HomeController@index')->name('home');





Route::get('/admin', function () {
    return view('dasboard/layout/admin');
});

Route::get('/sismusic', function () {
    return view('dasboard/layout/public');
});

Route::get('/lista', function () {
    return view('cursos/lista');
});
Route::get('/piano', function () {
    return view('piano/piano');
});
Route::get('/piano1', function () {
    return view('piano/index');
});
Auth::routes();


