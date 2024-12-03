<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Questions;
use App\Models\SelectsModel;
use App\Models\FormModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        
        $usuarios = User::all();
        $formulario = DB::table('forms')->get();
        $preguntasFormulario = DB::table('questionsforms')->get();
        $preguntas = DB::table('questions')->get();
        $preguntasDependientes = DB::table('selects')->get();
        
        return view("auth.views.home-page", compact('usuarios', 'formulario', 'preguntasFormulario', 'preguntas', 'preguntasDependientes'));
    }

    public function show(Request $request){
        return view("auth.views.settings-view");
    }

}
