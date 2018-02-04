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
Route::get('/usuarios', function() {
    return 'Aqui aniràn els usuaris';
});

/* RUTA PROVA PER A MOSTRAR ID D'USUARIS */
Route::get('/usuarios/{id}', function($id) {
	return "Mostrant detalls de l'usuari: {$id}";
	//usuarios/nuevo != usuarios/[0-9]+
})->where('id', '\d+');  //Expressió regular per a que no coincideixi amb la següent

Route::get('/usuarios/nuevo', function () {
	return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
	$name= ucfirst($name);
	$nickname= ucfirst($nickname);
	
	if ($nickname) {
		return "Bienvenido {$name}, tu apodo es {$nickname}";
	} else {
		return "Bienvenido {$name}";
	}
});