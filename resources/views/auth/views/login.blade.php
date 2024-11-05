@extends('Layouts.welcome')

@section('titulo', 'Inicio de sesión')

@section('seccion')
    <div class="seccion_imagen sm:w-[50%] absolute start-0">
        <img src="{{ asset('img/EscudoAlcaldiaFusa.png') }}" alt="Escudo alcaldia" class="hidden sm:block sm:w-[50%] sm:m-auto sm:mt-[15%]">
    </div>

    <hr class="sm:w-[30%] rotate-90 absolute ml-[40%] mt-[22%] bg-gray-400">

    <div class="seccion_formulario flex sm:w-[50%] sm:absolute sm:end-0">
        <form action="{{ route('validacion-sesion') }}" method="post"
            class="w-96 sm:w-[50%] sm:h-[50%] m-auto mt-[20%] p-5 flex flex-col">
            @csrf

            @error('invalid_credentials')
                
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                    {{ 'Usuario o contraseña no válido' }}
                  </div>
            @enderror

            <label for="correo" class="leading-6 text-gray-900 font-medium"> Correo electrónico </label>
            <input type="email" name="email" id="correo" value="{{ old('email') }}" placeholder="usuario@example.com"
                class="w-full rounded-md mt-[3%] text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">
            @error('email')  {{$message}}   @enderror

            <label for="claveIngreso" class="leading-6 text-gray-900 font-medium mt-6"> Contraseña </label>
            <input type="password" name="password" id="claveIngreso" placeholder="*******"
                class="w-full rounded-md mt-[3%] text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">
            @error('password')  {{$message}}   @enderror


            <a href="{{ url('olvido-clave') }}"
                class="text-xs text-right text-[#3264A2] mt-[2%] font-medium">¿Has olvidado tu contraseña?</a>

            <input type="submit" value="Iniciar sesión"
                class="w-full h-10 bg-[#3DAE2B] rounded-md mt-[7%] cursor-pointer hover:bg-[#3FC828]/80 font-medium leading-8">
        </form>
    </div>
@endsection
