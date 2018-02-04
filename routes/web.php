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
/* RUTA DE PÀGINA D'USUARIS*/
Route::get('/usuarios', 'UserController@index');

/* RUTA PROVA PER A MOSTRAR ID D'USUARIS */
Route::get('/usuarios/{id}', 'UserController@show')
->where('id', '\d+');  //Expressió regular per a que no coincideixi amb la següent

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');