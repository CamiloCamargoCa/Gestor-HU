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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('historiasUsuarios', 'HistoriasUsuariosController');

Route::resource('proyectos', 'ProyectosController');

Route::resource('criterios', 'CriteriosController');

Route::resource('historiasDetalles', 'HistoriasDetalleController');

Route::resource('rolles', 'RollesController');

Route::resource('users', 'UsersController');

Route::resource('usuarios', 'UsuariosController');

Route::resource('empleados', 'EmpleadosController');