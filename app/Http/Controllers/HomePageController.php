<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        
        $usuarios = User::all();
        
        return view("auth.views.home-page", compact('usuarios'));
    }

    public function show(Request $request){
        return view("auth.views.settings-view");
    }

}
