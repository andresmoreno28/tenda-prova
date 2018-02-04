<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return 'Aqui aniràn els usuaris';
    }

    public function show($id)
    {
    	return "Mostrant detalls de l'usuari: {$id}";
    }

    public function create()
    {
    	return 'Crear nuevo usuario';
    }
}
