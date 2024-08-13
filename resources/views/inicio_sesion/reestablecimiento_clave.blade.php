@extends('welcome')

@section("titulo", "Reestablecimiento de clave")

@section("seccion")
<div class="w-[50%] h-[60%] m-auto mt-[12%]">
    <form action="" method="post" class=" w-[100%] h-[100%] ">
        <div class="">
            <label for="correo" class="leading-6 text-gray-900 font-medium"> Correo electrónico </label>
            <input type="email" name="email" id="correo" placeholder="usuario@example.com" class="w-[100%] mt-[3%] rounded-md mt-[3%] text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">

            <input type="button" id="solicitar-codigo" value="Envíar" class="w-[100%] bg-[#3DAE2B] p-2 mt-10 rounded-md cursor-pointer hover:bg-[#3FC828]/80 font-medium">
        </div>

    </form>
</div>
@endsection