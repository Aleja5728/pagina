<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Vista principal de inicio de sesión
    public function index()
    {
        return view('auth.views.login');
    }

    // Función para validar existencia de usuario en la base de datos e iniciar sesión
    public function validacion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no tiene un formato válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home-page');
        };

        return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña invalida'])->withInput();
    }

    // Función para cerrar sesión
    public function cerrarsesion()
    {
        Auth::Logout();

        return redirect()->route('login');
    }
}

