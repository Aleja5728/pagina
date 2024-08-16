<!-- Formulario para creación de usuarios -->
<section class="formulario fixed w-full h-[80%] top-14">
    <div class="bg-gray-100 w-5/6 h-full mx-auto overflow-y-auto mt-2">
        <form action="{{ route('usuarios.store') }}" method="post" class="px-10 py-2" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombres
                            completos</label>
                            <div class="text-xs text-red-400">
                                @error('nombre')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellidos
                            completos</label>
                            <div class="text-xs text-red-400">
                                @error('apellido')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número
                            de documento</label>
                            <div class="text-xs text-red-400">
                                @error('numero_documento')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="text" name="numero_documento" id="numero_documento" value="{{ old('numero_documento') }}"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="genero" class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                        <div class="mt-2">
                            <select name="genero" id="genero"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                <option value="masculino">MASCULINO</option>
                                <option value="femenino">FEMENINO</option>
                                <option value="otro">OTRO</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Número
                            telefonico</label>
                            <div class="text-xs text-red-400">
                                @error('telefono')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo
                            electrónico</label>
                            <div class="text-xs text-red-400">
                                @error('email')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="email" name="email" id="correo" value="{{ old('email') }}"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="password"
                            class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                            <div class="text-xs text-red-400">
                                @error('password')  {{$message}}   @enderror
                            </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="dependencia"
                            class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                        <div class="mt-2">
                            <select name="dependencia" id="dependencia"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                <option value="defecto">SELECCIONE UNA OPCION</option>
                                <option value="despacho alcaldia">DESPACHO ALCALDE</option>
                                <option value="secretaria administrativa">SECRETARIA ADMINISTRATIVA</option>
                                <option value="secretaria de agricultura">SECRETARIA DE AGRICULTURA</option>
                                <option value="secretaria de cultura">SECRETARIA DE CULTURA</option>
                                <option value="secretaria de desarrollo academico">SECRETARIA DE DESARROLLO ECONOMICO
                                </option>
                                <option value="secretaria de educacion">SECRETARIA DE EDUCACION</option>
                                <option value="secretaria de gabinete">SECRETARIA DE GABINETE</option>
                                <option value="secretaria de gestion social">SECRETARIA DE GESTION SOCIAL</option>
                                <option value="secretaria de gobierno">SECRETARIA DE GOBIERNO</option>
                                <option value="secretaria de hacienda">SECRETARIA DE HACIENDA</option>
                                <option value="secretaria de infraestructura">SECRETARIA DE INFRAESTRUCTURA</option>
                                <option value="secretaria de la mujer">SECRETARIA DE LA MUJER</option>
                                <option value="secretaria de movilidad">SECRETARIA DE MOVILIDAD</option>
                                <option value="secretaria de planeacion">SECRETARIA DE PLANEACION</option>
                                <option value="secretaria de salud">SECRETARIA DE SALUD</option>
                                <option value="secretaria juridica">SECRETARIA JURIDICA</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 mt-8 block">
                        <label for="tipo_funcionario" class=" text-sm font-medium leading-6 text-gray-900">Tipo de
                            funcionario</label>

                        <input type="radio" name="tipo_funcionario" id="planta" value="planta" class="ml-10">
                        <label for="planta" class="mr-20">PLANTA</label>

                        <input type="radio" name="tipo_funcionario" id="contratista" value="contratista"
                            class="">
                        <label for="contratista">CONTRATISTA</label>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                        <div class="mt-2">
                            <select name="cargo" id="cargo"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                <option value="defecto">SELECCIONE UNA OPCION</option>
                                <option value="alcalde">ALCALDE</option>
                                <option value="asesor">ASESOR</option>
                                <option value="auxiliar administrativo">AUXILIAR ADMINISTRATIVO</option>
                                <option value="auxiliar area de la salud">AUXILIAR AREA DE LA SALUD</option>
                                <option value="comisaria de familia">COMISARIA DE FAMILIA</option>
                                <option value="contratista">CONTRATISTA</option>
                                <option value="corregidor">CORREGIDOR</option>
                                <option value="inspector">INSPECTOR</option>
                                <option value="inspector de_policia">INSPECTOR DE POLICIA</option>
                                <option value="profesional especializado">PROFESIONAL ESPECIALIZADO</option>
                                <option value="profesional especializado area de salud">PROFESIONAL ESPECIALIZADO AREA
                                    DE SALUD</option>
                                <option value="profesional universitario area de la salud">PROFESIONAL UNIVERSITARIO
                                    AREA DE LA SALUD</option>
                                <option value="profesional universitario">PROFESIONAL UNIVERSITARIO</option>
                                <option value="secretario de despacho">SECRETARIO DE DESPACHO</option>
                                <option value="secretario de despacho e">SECRETARIO DE DESPACHO (E)</option>
                                <option value="director">DIRECTOR</option>
                                <option value="director e">DIRECTOR(E)</option>
                                <option value="jefe de oficina">JEFE DE OFICINA</option>
                                <option value="jefe de oficina e">JEFE DE OFICINA(E)</option>
                                <option value="secretaria">SECRETARIA</option>
                                <option value="secretario">SECRETARIO</option>
                                <option value="secretario ejecutivo del despacho del alcalde">SECRETARIO EJECUTIVO DEL
                                    DESPACHO DEL ALCALDE
                                </option>
                                <option value="tecnico administrativo">TECNICO ADMINISTRATIVO</option>
                                <option value="tecnico area de la salud">TECNICO AREA DE LA SALUD</option>
                                <option value="tecnico operativo">TECNICO OPERATIVO</option>
                                <option value="pasante">PASANTE</option>
                                <option value="comandante de transito">COMANDANTE DE TRANSITO</option>
                                <option value="subcomandante de transito">SUBCOMANDANTE DE TRANSITO</option>
                                <option value="agente de transito">AGENTE DE TRANSITO</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 mt-8 block">
                        <label for="rol" class=" text-sm font-medium leading-6 text-gray-900">Rol</label>

                        <input type="radio" name="rol" id="creador" value="creador" class="ml-36">
                        <label for="planta" class="mr-16">CREADOR</label>

                        <input type="radio" name="rol" id="visor" value="visor" class="">
                        <label for="contratista">VISOR</label>
                    </div>

                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto de
                            perfil</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-2">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Selecciona una imagen</span>
                                        <input id="file-upload" name="foto_perfil" type="file" class="sr-only">
                                    </label>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG o JPG máximo 2MB</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="sm:col-start-5 mb-5 bg-[#DDD] hover:bg-[#CCC] p-2 text-center cursor-pointer volver_modal_1">
                        <input type="button" value="Volver" class="cursor-pointer">
                    </div>
                    <div class="sm:col-start-6 mb-5 bg-[#DDD] hover:bg-[#CCC] p-2 text-center cursor-pointer">
                        <input type="submit" value="Crear usuario" class="cursor-pointer">
                    </div>

                </div>
        </form>
    </div>
</section>
