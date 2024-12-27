@extends('Layouts.welcome')

@section('titulo', 'Modificación de usuarios')

@section('seccion')
    <section class="fixed w-full h-[80%] modal top-14 select-none">
        <div class="bg-gray-100 w-5/6 h-full mx-auto overflow-y-auto mt-2">
            <form action="{{ route('usuarios.update', $usuarios->id) }}" method="post" class="px-10 py-2"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Nombres completos -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Nombres
                                completos</label>
                            <div class="mt-2">
                                <input type="text" name="nombre" value="{{ $usuarios->nombre }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Apellidos completos -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Apellidos
                                completos</label>
                            <div class="mt-2">
                                <input type="text" name="apellido" value="{{ $usuarios->apellido }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Número de documento -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Número de documento</label>
                            <div class="mt-2">
                                <input type="text" name="numero_documento" value="{{ $usuarios->numero_documento }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Género -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                            <div class="mt-2">
                                <select name="genero" value=""
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">

                                    <option value="{{ $usuarios->genero }}">{{ $usuarios->genero }}</option>
                                    @if ($usuarios->genero == 'femenino')
                                        <option value="masculino">MASCULINO</option>
                                        <option value="OTRO">OTRO</option>
                                    @elseif ($usuarios->genero == 'masculino')
                                        <option value="femenino">FEMENINO</option>
                                        <option value="OTRO">OTRO</option>
                                    @elseif ($usuarios->genero == 'OTRO')
                                        <option value="masculino">MASCULINO</option>
                                        <option value="femenino">FEMENINO</option>
                                    @endif

                                </select>
                            </div>
                        </div>

                        <!-- Número teléfonico -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Número
                                telefonico</label>
                            <div class="mt-2">
                                <input type="text" name="telefono" value="{{ $usuarios->telefono }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Correo electronico -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Correo
                                electrónico</label>
                            <div class="mt-2">
                                <input type="email" name="email" value="{{ $usuarios->email }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Dependencia -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                            <div class="mt-2">
                                <select name="dependencia" value="{{ $usuarios->dependencia }}"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">

                                    <option value="{{ $usuarios->dependencia }}">{{ $usuarios->dependencia }}</option>

                                    @if ($usuarios->dependencia == 'defecto')
                                    <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA</OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'despacho alcaldia')
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA</OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria administrativa')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA</OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de agricultura')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de cultura')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de desarrollo academico')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de educacion')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de gabinete')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de gestion social')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de gobierno')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de hacienda')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de infraestructura')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de la mujer')
                                        <OPTION VALUE="DESPACHO ALCALDIA">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de movilidad')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de planeacion')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria de salud')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria juridica">SECRETARIA JURIDICA</OPTION>
                                    @elseif ($usuarios->dependencia == 'secretaria juridica')
                                        <OPTION VALUE="despacho alcaldia">DESPACHO ALCALDE</OPTION>
                                        <OPTION VALUE="secretaria administrativa">SECRETARIA ADMINISTRATIVA</OPTION>
                                        <OPTION VALUE="secretaria de agricultura">SECRETARIA DE AGRICULTURA</OPTION>
                                        <OPTION VALUE="secretaria de cultura">SECRETARIA DE CULTURA</OPTION>
                                        <OPTION VALUE="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO
                                            ECONOMICO
                                        </OPTION>
                                        <OPTION VALUE="secretaria de educacion">SECRETARIA DE EDUCACION</OPTION>
                                        <OPTION VALUE="secretaria de gabinete">SECRETARIA DE GABINETE</OPTION>
                                        <OPTION VALUE="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</OPTION>
                                        <OPTION VALUE="secretaria de gobierno">SECRETARIA DE GOBIERNO</OPTION>
                                        <OPTION VALUE="secretaria de hacienda">SECRETARIA DE HACIENDA</OPTION>
                                        <OPTION VALUE="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA
                                        </OPTION>
                                        <OPTION VALUE="secretaria de la mujer">SECRETARIA DE LA MUJER</OPTION>
                                        <OPTION VALUE="secretaria de movilidad">SECRETARIA DE MOVILIDAD</OPTION>
                                        <OPTION VALUE="secretaria de planeacion">SECRETARIA DE PLANEACION</OPTION>
                                        <OPTION VALUE="secretaria de salud">SECRETARIA DE SALUD</OPTION>
                                    @endif



                                </select>
                            </div>
                        </div>

                        <!-- Tipo de funcionario -->
                        <div class="sm:col-span-3 mt-8 block">
                            <label class=" text-sm font-medium leading-6 text-gray-900">Tipo de
                                funcionario</label>

                            @if ($usuarios->tipo_funcionario == 'planta')
                                <input checked type="radio" name="tipo_funcionario" id="planta" value="planta" class="ml-10">
                                <label for="planta" class="mr-20">PLANTA</label>
                                <input type="radio" name="tipo_funcionario" id="contratista" value="contratista"">
                                <label for="contratista">CONTRATISTA</label>
                            @else
                                <input type="radio" name="tipo_funcionario" id="planta" value="planta" class="ml-10">
                                <label for="planta" class="mr-20">PLANTA</label>
                                <input checked type="radio" name="tipo_funcionario" id="contratista" value="contratista"">
                                <label for="contratista">CONTRATISTA</label>
                            @endif

                        </div>

                         <!-- Rol -->
                        <div class="sm:col-span-3 mt-8 block">
                            <label class=" text-sm font-medium leading-6 text-gray-900">Rol</label>

                            <input type="radio" name="rol" id="Administrador" value="Administrador" class="ml-10">
                            <label for="Administrador" class="sm:mr-20">ADMINISTRADOR</label>

                            <input type="radio" name="rol" id="Creador" value="Creador"
                                class="">
                            <label for="Creador">CREADOR</label>
                        </div>

                        <!-- Cargo -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                            <div class="mt-2">
                                <select name="cargo"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">

                                    <option value="{{ $usuarios->cargo }}">{{ $usuarios->cargo }}</option>

                                    @if ($usuarios->cargo == 'alcalde')
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'asesor')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'auxiliar administrativo')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'auxiliar area de la salud')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'comisaria de familia')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'contratista')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'corregidor')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'inspector')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'inspector de policia')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO
                                            AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO
                                            DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'profesional especializado')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'profesional especializado area de salud')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'profesional universitario area de la salud')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'profesional universitario')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'secretario de despacho')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'secretario de despacho_e')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'director')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'director e')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'jefe de oficina')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'jefe de oficina e')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'secretaria')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'secretario')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'secretario ejecutivo del despacho del alcalde')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'tecnico administrativo')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'tecnico area de la salud')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'tecnico operativo')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'pasante')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'comandante de transito')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'subcomandante de transito')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="agente de transito">AGENTE DE TRANSITO</option>
                                    @elseif ($usuarios->cargo == 'agente de transito')
                                        <option value="alcalde">ALCALDE</option>
                                        <option value="asesor">ASESOR</option>
                                        <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                        <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                        <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                        <option value="contratista">CONTRATISTA</option>
                                        <option value="corregidor">CORREGIDOR</option>
                                        <option value="inspector">INSPECTOR</option>
                                        <option value="inspector de policia">INSPECTOR DE POLICIA</option>
                                        <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                        <option value="profesional especializado area de salud">PROFESIONAL
                                            ESPECIALIZADO AREA
                                            DE SALUD</option>
                                        <option value="profesional universitario area de la salud">PROFESIONAL
                                            UNIVERSITARIO
                                            AREA DE LA SALUD</option>
                                        <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                        <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                        <option value="secretario de despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                        <option value="director">DIRECTOR</option>
                                        <option value="director e">DIRECTOR(E)</option>
                                        <option value="jefe de oficina">JEFE DE OFICINA</option>
                                        <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                        <option value="secretaria">SECRETARIA</option>
                                        <option value="secretario">SECRETARIO</option>
                                        <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO
                                            EJECUTIVO DEL
                                            DESPACHO DEL ALCALDE
                                        </option>
                                        <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                        <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                        <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                        <option value="pasante">PASANTE</option>
                                        <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                        <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                    @endif

                                </select>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                            <div class="text-xs text-red-400">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mt-2">
                                <input type="password" name="password"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <!-- Foto de perfil -->
                        <div class="col-span-full">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Foto de
                                perfil</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-2">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Selecciona una imagen</span>
                                            <input id="file-upload" name="foto_perfil" type="file"
                                                class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG o JPG máximo 2MB</p>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('usuarios.index') }}">
                            <div
                                class="sm:col-start-5 mb-5 bg-[#DDD] hover:bg-[#CCC] p-2 text-center cursor-pointer volver">
                                <input type="button" value="Volver" class="cursor-pointer">
                            </div>
                        </a>
                        <div class="sm:col-start-6 mb-5 bg-[#DDD] hover:bg-[#CCC] p-2 text-center cursor-pointer">
                            <input type="submit" value="Actualizar usuario" class="cursor-pointer">
                        </div>

                    </div>
            </form>

        </div>
    </section>
@endsection
