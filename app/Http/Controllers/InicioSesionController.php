<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioSesionController extends Controller
{
    public function index()
    {
        return view('inicio_sesion.index');
    }

    public function validacion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('pagina-inicio');
        };

        return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña invalida'])->withInput();
    }

    public function cerrarsesion()
    {
        Auth::Logout();

        return redirect()->route('login');
    }
}
