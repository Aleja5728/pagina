@extends("welcome")

@section("titulo", "Cambio de clave")

@section("seccion")
<div class="w-[50%] h-[800%] m-auto mt-[8%]">
    <form action="#" method="post" class="w-[100%] h-[100%]">
        <div>
            <label for="claveIngreso" class="font-medium leading-6 text-gray-900"> Nueva contraseña </label>
            <input type="password" name="claveIngreso" id="claveIngreso" placeholder="*******" class="w-[100%] rounded-md mt-2 text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">
            
        </div>
        <div class="mt-5">
            <label for="claveConfirmacion" class="font-medium leading-6 text-gray-900"> Confirma contraseña </label>
            <input type="password" name="claveConfirmacion" id="claveConfirmacion" placeholder="*******" class="w-[100%] rounded-md mt-2 text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">
            
        </div>

        <input type="submit" value="Envíar" class="w-[100%] p-2 bg-[#3DAE2B] rounded-md mt-[7%] cursor-pointer hover:bg-[#3FC828]/80 font-medium">
    </form>
</div>
@endsection