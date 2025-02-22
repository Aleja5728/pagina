<style>
    .menu_items,
    .modal_informacion {
        display: none;
    }
</style>

<!-- Componente de menú desplegable -->

<div class="select-none">
    <div class="absolute right-7 top-3">
        <button>
            <img src="{{ auth()->user()->foto_perfil ? asset(auth()->user()->foto_perfil) : asset('img/user.png') }}" alt="Foto de perfil" class="menu rounded-full w-[60px] h-[60px]">
        </button>
    </div>
 
    <div class="relative z-30">
        <div class="w-64 absolute right-14 menu_items p-2 shadow-md rounded-3xl border-2 divide-y  bg-[#fff]">
            <!-- Botón de información personal -->
            <div class="rounded-md hover:bg-gray-50 px-2 ">
                <button class="w-full h-14 text-left informacion_personal">
                    Información personal
                </button>
            </div>

            <!-- Botón de configuración -->
            <div class="rounded-md hover:bg-gray-50 px-2">
                <a href="{{route('settings-view')}}">
                    <div  class="w-full h-14 pt-4 cursor-pointer">Configuración</div>
                </a>
            </div>

            <!-- Botón de cerrar sesión -->
            <div class="rounded-md hover:bg-gray-50 px-2">
                <form action="{{ route('cerrar-sesion') }}" method="post">
                    @csrf
                    <button class="w-full h-14 text-left" type="input">
                        Cerrar sesión
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- Componente de información personal -->
<div class="fixed w-full h-[80%] sm:top-[10%] top-24 left-[10%] modal_informacion z-20 select-none">

    <div class="absolute w-5/6 h-full overflow-y-auto bg-[#fff] border-2 border-color-gray-100 rounded-lg">
        <form action=""  class="px-10 py-2 ">
            <!-- Imagen de perfil -->
            <div class="sm:mx-[42%] mx-24 mt-8">
            <img src="{{ auth()->user()->foto_perfil ? asset(auth()->user()->foto_perfil) : asset('img/user.png') }}" alt="Foto de perfil" class="rounded-full w-28 h-28">
            </div>

            <!-- Datos de usuario -->
            <div class="sm:mt-10 sm:grid grid-cols-1 sm:gap-x-6 sm:gap-y-8 sm:grid-cols-6 mt-4">
                <div class="sm:col-span-3 sm:mt-0">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombres
                        completos</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" value="{{ auth()->user()->nombre ?? " " }}" id="nombre" disabled
                            class="nombre block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3 mt-4 sm:mt-0">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellidos
                        completos</label>
                    <div class="mt-2">
                        <input type="text" name="apellido" id="apellido" value="{{ auth()->user()->apellido ?? " " }}" disabled
                            class="apellido block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3 mt-4 sm:mt-0">
                    <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número de
                        documento</label>
                    <div class="mt-2">
                        <input type="number" name="numero_documento" value="{{ auth()->user()->numero_documento ?? " " }}" id="numero_documento" disabled
                            class="numero_documento block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3 mt-4 sm:mt-0">
                    <label for="dependencia"
                        class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                    <div class="mt-2">
                        <input type="text" name="dependencia" value="{{ auth()->user()->dependencia->dependencia ?? " " }}" id="dependencia" disabled
                            autocomplete="given-name"
                            class="block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3 mt-4 sm:mt-0">
                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                    <div class="mt-2">
                        <input type="text" name="telefono" value="{{ auth()->user()->telefono ?? " " }}" id="telefono" disabled
                            autocomplete="given-name"
                            class="telefono block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3 mt-4 sm:mt-0">
                    <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo
                        electrónico</label>
                    <div class="mt-2">
                        <input type="text" name="email" value="{{ auth()->user()->email ?? " " }}" id="correo" disabled
                            autocomplete="given-name"
                            class="correo block w-full rounded-md border-[1px] p-1.5 text-gray-900 shadow-sm border-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>

            </div>

            <!-- Botones para cerrar modal-->
            <div class="relative sm:mt-14 sm:mb-2 mt-8">
                <input type="button" value="Volver"
                    class="cerrar_modal w-36 h-10 bg-[#3268C9] cursor-pointer text-white hover:bg-[#5381D4]">
            </div>
        </form>
    </div>

</div>

<script src="{{asset('js/menu.js')}}"></script>
