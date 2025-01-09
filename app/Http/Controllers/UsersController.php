<?php

namespace App\Http\Controllers;

use App\Mail\CorreoElectronico;
use Illuminate\Http\Request;
use App\Models\User;
use Flasher\Prime\Storage\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{

    // Buscar usuarios
    public function index(Request $request)
    {
        $buscar_usuario = $request->get('buscar_usuario');

        $usuarios = User::where('nombre', 'like', '%' . $buscar_usuario . '%')
            ->orWhere('numero_documento', 'like', '%' . $buscar_usuario . '%')
            ->Paginate(7);

        return view("admin-settings.views.user-creation", compact('usuarios', 'buscar_usuario'));
    }

    // Crear usuarios
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'numero_documento' => 'required|min:3|integer|unique:usuarios,numero_documento',
            'telefono' => 'integer',
            'password' => 'required|min:8',
            'email' => 'required|unique:usuarios,email',
        ]);

        $usuarios = new User();

        // Insertar datos en la base de datos
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->numero_documento = $request->numero_documento;
        $usuarios->genero = $request->genero;
        $usuarios->telefono = $request->telefono;
        $usuarios->email = $request->email;
        $usuarios->dependencia = $request->dependencia;
        $usuarios->tipo_funcionario = $request->tipo_funcionario;
        $usuarios->rol = $request->rol;
        $usuarios->cargo = $request->cargo;



        $usuarios->password = bcrypt($request->password);

        // Guardar imagen
        if ($request->hasFile('foto_perfil')) {
            //Asignar imagen a una variable
            $imagen = $request->file("foto_perfil");
            // Definir variable para url
            $direccionImagen = "foto_perfil/";
            // Asignacion de nombre
            $nombreImagen = $request->nombre . " " . $request->apellido;
            // Subir imagen a carpeta
            $descargaImagen = $request->file("foto_perfil")->move($direccionImagen, $nombreImagen);
            // Subir imagen a base de datos
            $usuarios->foto_perfil = $direccionImagen . $nombreImagen;
        };

        // Asignación de roles
        $usuarios->syncRoles($request->rol);

        $usuarios->save();


        return back() -> with('mensaje', 'Haz agregado un usuario ');
    }

    // Visualizar usuarios eliminados
    public function papelera()
    {
        $usuarios = User::onlyTrashed()->get();

        return view('components.usuarios_eliminados', compact('usuarios'));
    }

    // Restaurar usuarios eliminados
    public function restaurar(User $id){
        $id -> restore();

        return redirect()->route('usuarios.index');
    }

    // Editar datos de usuario
    public function edit($id)
    {
        $usuarios = User::find($id);
        return view('admin-settings.views.user-modification', compact('usuarios'));
    }

    // Actualizar datos de usuario
    public function update(Request $request, $id)
    {
        $usuarios = User::find($id);

        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->numero_documento = $request->numero_documento;
        $usuarios->genero = $request->genero;
        $usuarios->telefono = $request->telefono;
        $usuarios->email = $request->email;
        $usuarios->dependencia = $request->dependencia;
        $usuarios->tipo_funcionario = $request->tipo_funcionario;
        $usuarios->rol = $request->rol;
        $usuarios->cargo = $request->cargo;
        $usuarios->password = bcrypt($request->password);
        // Guardar imagen
        if ($request->hasFile('foto_perfil')) {
            //Asignar imagen a una variable
            $imagen = $request->file("foto_perfil");
            // Definir variable para url
            $direccionImagen = "foto_perfil/";
            // Asignacion de nombre
            $nombreImagen = time() . "-" . $request->nombre . " " . $request->apellido;
            // Subir imagen a carpeta
            $descargaImagen = $request->file("foto_perfil")->move($direccionImagen, $nombreImagen);
            // Subir imagen a base de datos
            $usuarios->foto_perfil = $direccionImagen . $nombreImagen;
        };


        // Asignación de roles
        $usuarios->syncRoles($request->rol);

        $usuarios->save();


        return redirect()->route('usuarios.index');
    }

    // Elimina usuarios
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return back();
    }

}
