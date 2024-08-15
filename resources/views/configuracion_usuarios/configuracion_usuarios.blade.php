@extends('welcome')

@section('titulo', 'Registro usuarios')

@section('cabecera')
    <style>
        .formulario {
            display: none;
        }
    </style>
@endsection

@section('seccion')

    <!-- Componente de menú -->
    <x-menu> </x-menu>

    <!-- Menú vista de usuarios -->
    <div class="static flex w-full h-12 mt-10">
        <div class="ml-8 mr-8">
            <p class="font-montserrat text-3xl font-normal"> Lista de usuarios </p>
        </div>

        <!-- Botón para agregar usuario -->
        <div>
            <button
                class="agregar_usuario bg-[#3268C9] hover:bg-[#5381D4] text-[#fff] font-montserrat text-xs rounded-xl w-32 p-2.5 cursor-pointer">
                Agregar usuario
            </button>
        </div>
        <!-- Buscar usuario -->
        <form action="configuracion-usuarios" method="GET">
            <div class="absolute right-12 barra_busqueda">
                <div>
                    <div>
                        <input type="text" name="buscar_usuario" id="buscar_usuario" autocomplete="off"
                            value="{{ $buscar_usuario }}"
                            class="pb-0 mt-2 bg-transparent border-[#000] border-y-0 border-x-0 border-b-[1.5px] w-96 focus:ring-0 relative right-7">
                    </div>
                </div>
            </div>
            <div class="absolute right-12">
                <div>
                    <button class="w-10 h-10 cursor-pointer absolute top-1 right-7" type="submit">
                        <img src=" {{ asset('img/icons8-búsqueda-24.png') }}" alt="Icono de busqueda"
                            class="icono_busqueda">
                    </button>
                </div>
            </div>
        </form>


    </div>

    <!-- Vista CRUD -->
    <div class="static  m-10 h-80">
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-[#3DAE2B]">
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Apellidos</th>
                    <th class="px-4 py-2 text-left">Número de documento</th>
                    <th class="px-4 py-2 text-left">Teléfono</th>
                    <th class="px-4 py-2 text-left">Dependencia</th>
                    <th class="px-4 py-2 text-left">Rol</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="bg-[#fff] border-b-[1px] border-b-[#999]">
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->nombre }}</td>
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->apellido }}</td>
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->numero_documento }} </td>
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->telefono }}</td>
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->dependencia }}</td>
                        <td class="px-4 py-2 text-left text-[#666]">{{ $usuario->rol }}</td>
                        <td class="flex pt-2">
                            <form action="{{ route('editar_usuarios', $usuario->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="px-3">
                                    <img src="{{ asset('img/editar_crud.png') }}" alt="editar usuario" class="w-6">
                                </button>
                            </form>

                            <form action="{{ route('eliminar_usuarios', $usuario->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3">
                                    <img src="{{ asset('img/eliminar_crud.png') }}" alt="eliminar usuario" class="w-6">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>


        </table>


    </div>

    <!-- Paginación de usuarios -->
    <div class="">
        {{ $usuarios->links('pagination::tailwind') }}
    </div>

    <!-- Formulario de creación -->
    <x-formulario_creacion_usuarios class="formulario"></x-formulario_creacion_usuarios>

@endsection

@section('script')
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/crear_usuario.js')}}"></script>
@endsection
