@extends('Layouts.welcome')

@section('titulo', 'Configuración')

@section('seccion')

    <!-- Menú superior derecho -->
    <x-dropdown-menu> </x-dropdown-menu>

    <div class="sm:grid sm:grid-cols-3 sm:gap-x-6 sm:m-10 sm:mt-12 select-none mx-5 my-10">

        @can('usuarios')  <!-- Bloquear sección dependiendo el permiso -->
        <a href="{{ route('usuarios.index') }}">
            <div>
                <button
                    class="boton_usuarios w-full h-24 sm:h-36 sm:m-2 bg-gradient-to-r from-[#68CA6E] to-[#47BF4F] shadow-md hover:from-[#47BF4F] hover:to-[#68CA6E]">
                    <div class="absolute ml-5 mt-4 sm:ml-3 sm:mt-2">
                        <img src="{{ asset('img/icons8-usuario-96.png') }}" alt="" class="w-10 sm:w-12">
                    </div>

                    <div class="">
                        <p class="sm:text-xl text-l text-white font-normal font-montserrat text-right sm:mt-24 mt-8 mr-6">USUARIOS</p>
                    </div>

                </button>
            </div>
        </a>
        @endcan

        <a href="{{ route('template.index') }}">
            <div>
                <button
                    class="boton_plantilla w-full h-24 sm:h-36 sm:m-2 mt-4 bg-gradient-to-r from-[#74B2D5] to-[#54A1CA] shadow-md hover:from-[#54A1CA] hover:to-[#74B2D5]">
                    <div class="absolute ml-5 mt-2 sm:ml-3 sm:mt-2">
                        <img src="{{ asset('img/icons8-plantilla-96.png') }}" alt="" class="w-10 sm:w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="sm:text-xl text-l text-white font-normal font-montserrat text-right sm:mt-24 mt-8 mr-6">CREAR FORMULARIOS</p>
                    </div>
                </button>
            </div>
        </a>

        <a href="#">
            <div>
                <button
                    class="boton_formularios h-24 sm:h-36 sm:m-2 w-full mt-4 bg-gradient-to-r from-[#EF5751] to-[#EB312A] shadow-md hover:from-[#EB312A] hover:to-[#EF5751]">
                    <div class="absolute ml-5 mt-2 sm:ml-3 sm:mt-2">
                        <img src="{{ asset('img/navegador.png') }}" alt="" class="w-10 sm:w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="sm:text-xl text-l text-white font-normal font-montserrat text-right sm:mt-24 mt-8 mr-6">PUBLICAR FORMULARIOS
                        </p>
                    </div>
                </button>
            </div>
        </a>

        <a href="#">
            <div>
                <button
                    class="boton_publicar h-24 sm:h-36 sm:m-2 w-full mt-4  w-full bg-gradient-to-r from-[#F5CA4A] to-[#F2BF24] shadow-md hover:from-[#F2BF24] hover:to-[#F5CA4A]">
                    <div class="absolute ml-5 mt-2 sm:ml-3 sm:mt-2">
                        <img src="{{ asset('img/sitio-web.png') }}" alt="" class="w-10 sm:w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="sm:text-xl text-l text-white font-normal font-montserrat text-right sm:mt-24 mt-8 mr-6">EDITAR FORMULARIOS
                        </p>
                    </div>
                </button>
            </div>
        </a>

    </div>
@endsection
