<!-- Agregar variables a app\componente*  -->
<style>
    .boton_informe {
        display: none;
    }
</style>

<div id="{{ $id }}" class="sm:col-span-2 ml-8 mt-8 tarjeta_informacion_{{ $id }}">
    <div class="w-full h-64 rounded-3xl border-2 shadow-md">
        <div class="w-full h-14 p-5">

            <div class="relative">
                <p class="text-sm font-medium"> {{ $titulo ?? 'Titulo de formulario' }} </p>
                <button id="puntos_{{ $id }}" class="absolute right-0 top-0 puntos_{{ $id }}">
                    <img src=" {{ asset('img/puntos.png') }} " alt="Tres puntos" class="w-5 ">
                </button>

                <div id="boton_informe_{{ $id }}" class="boton_informe bg-[#80B9F7] w-32 h-10 p-2 rounded-lg text-center absolute right-0 top-8">
                    <button class="text-xs font-medium">
                        Descargar informe
                    </button>
                </div>

            </div>

        </div>
        <div class="w-full h-32 bg-[#EAECEE]">
            <img src="{{ $imagen ?? '' }}" alt="" class="h-32 w-full bg-contain">
        </div>
        <div class="w-full h-16 p-5">
            <p class="text-xs text-gray-400"> {{ $descripcion ?? 'Descripcion del formulario' }}</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tarjeta de información
        var puntos = document.querySelector("#puntos_{{ $id }}");
        var boton_informe = document.querySelector("#boton_informe_{{ $id }}");
        var tarjeta_informacion = document.querySelector(".tarjeta_informacion_{{ $id }}");

        puntos.addEventListener("click", (e) => {
            e.preventDefault();
            boton_informe.style.display = "block";
        });

        boton_informe.addEventListener("click", (e) => {
            e.preventDefault();
            alert("boton");
        });

        tarjeta_informacion.addEventListener("mouseleave", (e) => {
            e.preventDefault();
            boton_informe.style.display = "none";
        });
    });
</script>