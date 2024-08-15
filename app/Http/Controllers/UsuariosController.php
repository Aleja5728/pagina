<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $buscar_usuario = $request -> get('buscar_usuario');

        $usuarios = DB::table('usuarios')-> where('nombre', 'like', '%'.$buscar_usuario.'%')-> Paginate(7) ;
                    
        return view("configuracion_usuarios.configuracion_usuarios", compact('usuarios', 'buscar_usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Arreglar errores de validacion
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'numero_documento' => 'required|min:3|integer|unique:usuarios,numero_documento',
            'telefono' => 'integer',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:usuarios,email',
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
        $usuarios->cargo = $request->cargo;
        $usuarios->rol = $request->rol;
        $usuarios->password = bcrypt($request->password);

        // Guardar imagen
        if ($request->hasFile('foto_perfil')) {
            //Asignar imagen a una variable
            $imagen = $request->file("foto_perfil");
            // Definir variable para url
            $direccionImagen = "foto_perfil/";
            // Asignacion de nombre
            $nombreImagen = $request -> nombre . " " . $request -> apellido ;
            // Subir imagen a carpeta
            $descargaImagen = $request->file("foto_perfil")->move($direccionImagen, $nombreImagen);
            // Subir imagen a base de datos
            $usuarios->foto_perfil = $direccionImagen . $nombreImagen;
        };

        $usuarios->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuarios = User::find($id);
        return view('configuracion_usuarios.modificacion_usuarios', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
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
        $usuarios->cargo = $request->cargo;
        $usuarios->rol = $request->rol;
        $usuarios->password = $request->password;
        // Guardar imagen
        if ($request->hasFile('foto_perfil')) {
            //Asignar imagen a una variable
            $imagen = $request->file("foto_perfil");
            // Definir variable para url
            $direccionImagen = "foto_perfil/";
            // Asignacion de nombre
            $nombreImagen = time() . "-" . $request -> nombre . " " . $request -> apellido ;
            // Subir imagen a carpeta
            $descargaImagen = $request->file("foto_perfil")->move($direccionImagen, $nombreImagen);
            // Subir imagen a base de datos
            $usuarios->foto_perfil = $direccionImagen . $nombreImagen;
        };

        $usuarios->save();

        return redirect('configuracion-usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id -> delete();
        return back();
    }
}
