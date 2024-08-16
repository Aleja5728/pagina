@extends('welcome')

@section('titulo', 'Configuración')

@section('seccion')

    <!-- Menú superior derecho -->
    <x-menu></x-menu>

    <div class="grid grid-cols-3 gap-x-6 m-10 mt-12">

        <a href="{{ route('usuarios.index') }}">
            <div>
                <button
                    class="boton_usuarios w-full h-36 m-2 bg-gradient-to-r from-[#68CA6E] to-[#47BF4F] shadow-md hover:from-[#47BF4F] hover:to-[#68CA6E]">
                    <div class="absolute ml-3 mt-2">
                        <img src="{{ asset('img/icons8-usuario-96.png') }}" alt="" class="w-12">
                    </div>

                    <div class="">
                        <p class="text-xl text-white font-normal font-montserrat text-right mt-24 mr-6">USUARIOS</p>
                    </div>

                </button>
            </div>
        </a>


        <a href="#">
            <div>
                <button
                    class="boton_plantilla w-full h-36 m-2 bg-gradient-to-r from-[#74B2D5] to-[#54A1CA] shadow-md hover:from-[#54A1CA] hover:to-[#74B2D5]">
                    <div class="absolute ml-3 mt-2">
                        <img src="{{ asset('img/icons8-plantilla-96.png') }}" alt="" class="w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="text-xl text-white font-normal font-montserrat text-right mt-24 mr-6">PLANTILLA</p>
                    </div>
                </button>
            </div>
        </a>

        <a href="#">
            <div>
                <button
                    class="boton_formularios h-36 w-full m-2 bg-gradient-to-r from-[#EF5751] to-[#EB312A] shadow-md hover:from-[#EB312A] hover:to-[#EF5751]">
                    <div class="absolute ml-3 mt-2">
                        <img src="{{ asset('img/navegador.png') }}" alt="" class="w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="text-xl text-white font-normal font-montserrat text-right mt-24 mr-6">CREAR FORMULARIOS
                        </p>
                    </div>
                </button>
            </div>
        </a>

        <a href="#">
            <div>
                <button
                    class="boton_publicar h-36 m-2 w-full bg-gradient-to-r from-[#F5CA4A] to-[#F2BF24] shadow-md hover:from-[#F2BF24] hover:to-[#F5CA4A]">
                    <div class="absolute ml-3 mt-2">
                        <img src="{{ asset('img/sitio-web.png') }}" alt="" class="w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="text-xl text-white font-normal font-montserrat text-right mt-24 mr-6">PUBLICAR FORMULARIOS
                        </p>
                    </div>
                </button>
            </div>
        </a>

        <a href="#">
            <div>
                <button
                    class="editar h-36 w-full m-2 bg-gradient-to-r from-[#68CA6E] to-[#47BD4F] shadow-md hover:from-[#47BD4F] hover:to-[#68CA6E]">
                    <div class="absolute ml-3 mt-2">
                        <img src="{{ asset('img/icons8-editar-archivo-de-texto-96.png') }}" alt="" class="w-12">
                    </div>
                    <div class="relative right-0">
                        <p class="text-xl text-white font-normal font-montserrat text-right mt-24 mr-6">EDITAR FORMULARIO
                        </p>
                    </div>
                </button>
            </div>
        </a>
    </div>
@endsection
