<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){

        $usuarios = User::all();
        

        return view("pagina_inicio.pagina_inicio", compact('usuarios'));
    }

    public function show(Request $request){
        return view("pagina_inicio.configuracion");
    }
}
