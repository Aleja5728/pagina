<!-- Agregar variables a app\componente*  -->
<style>
    .boton_informe {
        display: none;
    }
</style>


<div class="sm:col-span-2 ml-8 mt-8 tarjeta_informacion">
    <div class="w-full h-64 rounded-3xl border-2 shadow-md">
        <div class="w-full h-14 p-5">

            <div class="relative">
                <p class="text-sm font-medium"> {{ $titulo ?? 'Titulo de formulario' }} </p>
                <button class="absolute right-0 top-0 puntos">
                    <img src=" {{ asset('img/puntos.png') }} " alt="Tres puntos" class="w-5 ">
                </button>

                <div class="boton_informe bg-[#80B9F7] w-32 h-10 p-2 rounded-lg text-center ">
                    <button class="text-xs font-medium">
                        Descargar informe
                    </button>
                </div>

            </div>

        </div>
        <div class="w-full h-32 bg-[#EAECEE]">
            <img src=" {{ $imagen ?? "" }}" alt="" class="h-32 w-full bg-contain">
        </div>
        <div class="w-full h-16 p-5">
            <p class="text-xs text-gray-400"> {{ $descripcion ?? 'Descripcion del formulario' }}</p>
        </div>
    </div>
</div>



<script src="{{asset('js/informacion_formularios.js')}}"></script>
