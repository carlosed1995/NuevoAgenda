<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::get('form_cargar_datos_usuarios', 'UsuariosController@form_cargar_datos_usuarios');

Route::resource('agendar', 'AgendarController');

Route::resource('cargarusuarios', 'UsuariosController@index');

Route::post('cargar_datos_usuarios', 'UsuariosController@cargar_datos_usuarios');

Route::get('cargar_datos_calendar', 'UsuariosController@cargar_datos_calendar');

Route::resource('activa', 'ActivarDesController');

Route::resource('listar', 'SolicitanteController');
 
Route::resource('gerencia','GerenciaController');

Route::get('carg','CalendarController@store');

Route::resource('agendarcita', 'AgendarCitaController');

Route::resource('confimar','ConfimarController');

Route::resource('historial', 'HistorialController');

Route::resource('onoff', 'ActivarController');

Route::resource('buscar', 'FormulariosController');

