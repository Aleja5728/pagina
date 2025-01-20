
@extends('Layouts.welcome')

@section('titulo', 'Registro usuarios')

@section('cabecera')
    <style>
        .formulario, .vista_usuarios_eliminados {
            display: none;
        }
    </style>
@endsection

@section('seccion')

    <!-- Componente de menú -->
    <x-dropdown-menu> </x-dropdown-menu>


    @if (session('mensaje'))
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-4 rounded relative" role="alert"">
            <p>{{ session('mensaje') }}</p>
        </div>
    @endif

    <!-- Menú vista de usuarios -->
    <div class="static flex flex-row flex-wrap w-full h-12 mt-10 select-none">
        <div class="ml-8 mr-8 ">
            <p class="font-montserrat text-2xl sm:text-3xl font-normal"> Lista de usuarios </p>
        </div>

        <!-- Botón para agregar usuario -->
        <div>
            <button
                class="agregar_usuario m-5 ml-8 sm:m-0 bg-[#3268C9] hover:bg-[#5381D4] text-[#fff] font-montserrat text-xs rounded-xl w-32 p-2.5 cursor-pointer">
                Agregar usuario
            </button>
        </div>
        
        <!-- Buscar usuario -->
        <form action="{{ route('usuarios.index') }}" method="GET">
            <div class="absolute right-0 sm:right-12 barra_busqueda">
                <div>
                    <div>
                        <input type="text" name="buscar_usuario" id="buscar_usuario" autocomplete="off"
                            value="{{ $buscar_usuario }}"
                            class="pb-0 sm:mt-2 mt-5 bg-transparent border-[#000] border-y-0 border-x-0 border-b-[1.5px] w-36 sm:w-64 focus:ring-0 relative right-7">
                    </div>
                </div>
            </div>
            <div class="absolute right-5 sm:right-12">
                <div>
                    <button class="w-10 h-10 cursor-pointer absolute right-0 sm:top-1 sm:right-7 mt-4 sm:mt-0" type="submit">
                        <img src=" {{ asset('img/icons8-busqueda-24.png') }}" alt="Icono de busqueda"
                            class="icono_busqueda">
                    </button>
                </div>
            </div>
        </form>


    </div>



    @if ($usuarios->count())
        <!-- Vista CRUD -->
        <div class="static mt-20 m-4 sm:m-10 h-80 select-none overflow-x-auto">
            <table class="table-auto w-full ">
                <thead>
                    <tr class="bg-[#3DAE2B] select-none">
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Apellidos</th>
                        <th class="px-4 py-2 text-left">Número de documento</th>
                        <th class="px-4 py-2 text-left">Teléfono</th>
                        <th class="px-4 py-2 text-left">Dependencia</th>
                        <th class="px-4 py-2 text-left select-none">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="bg-[#fff] border-b-[1px] border-b-[#999]">
                            <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->nombre }}</td>
                            <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->apellido }}</td>
                            <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->numero_documento }} </td>
                            <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->telefono }}</td>
                            <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->dependencia->dependencia}}</td> <!-- Se accede al campo dependencia de la tabla dependencia -->
                            {{-- <td class="px-4 py-2 text-left text-[#666]"><img src="{{asset($usuario->foto_perfil)}}" alt=""></td> --}}
                            <td class="flex pt-2 select-none">
                                <form action="{{ route('usuarios.edit', $usuario->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="px-3">
                                        <img src="{{ asset('img/editar_crud.png') }}" alt="editar usuario" class="w-6">
                                    </button>
                                </form>

                                <!-- Elimina usuarios lógicamente, deshabilita -->
                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post"  class="eliminar_usuario" id="eliminarForm{{ $usuario->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-3" onclick="confirmarEliminacion('{{ $usuario->id }}')">
                                        <img src="{{ asset('img/eliminar_crud.png') }}" alt="eliminar usuario"
                                            class="w-6">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>


        </div>

        @if ($errors->any())
            <div class="fixed w-96 bottom-10 bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                <ul class="text-base text-[#f00]">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Paginación de usuarios -->
        <div class="select-none">
            {{ $usuarios->links('pagination::tailwind') }}
        </div>
    @else
        <div id="alert-1" class="flex m-10 p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">

            <div class="ms-3 text-base font-medium">
                No hay registros
            </div>
        </div>

    @endif


    <!-- Formulario de creación -->
    <x-user-creation-form class="formulario" :dependencias="$dependencias"></x-user-creation-form>




@endsection

@section('script')
    <script src="{{ asset('js/crear_usuario.js') }}"></script>

    <script>
   function confirmarEliminacion(usuarioId) {
    console.log('ID del formulario: ', 'eliminarForm' + usuarioId);  
    const form = document.getElementById('eliminarForm' + usuarioId);
    if (form) {
        if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
            form.submit();
        }
    } else {
        console.error('Formulario no encontrado para el usuario con ID: ' + usuarioId);
    }
}

</script>
@endsection
