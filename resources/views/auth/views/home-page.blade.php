@extends('Layouts.welcome')

@section('titulo', 'Página de inicio')


@section('seccion')

    <!-- Componente de menú -->
    <x-dropdown-menu> </x-dropdown-menu>


    <!-- Condición para mostrar mensaje de éxito en caso de que se haya creado un formulario correctamente -->
    @if (Session::has('Exito'))
        <div class="py-4 px-8 m-6 text-sm text-green-800 rounded-lg bg-green-100" role="success">
            {{ Session::get('Exito') }}
        </div>
    @endif

    
    @if (auth()->user()->rol == 'Administrador')
    <!-- Si el usuario autenticado es administrador, podrá observar los gráficos definidos
            y podrá observar todos los formularios creados -->
        <div class="w-96">
            <h1>Gráfico de Respuestas por Formulario</h1>
            <canvas id="graficoRespuestas"></canvas>
        </div>

        <div class="grid grid-cols-3 sm:col-span-2 gap-6 m-8">

            @foreach ($formulario as $form)
                <div class="w-full h-36 rounded-3xl border-2 shadow-md">
                    <div class="w-full h-14 p-5">
                        <div class="relative">
                            <a href="{{ url('/template/') . '/' . $form->id }}"
                                class="text-sm font-medium">{{ $form->titulo }}</a>
                        </div>
                        <hr class="">
                    </div>
                    <div class="w-full h-16 p-5">
                        <p class="text-xs text-gray-400 line-clamp-3"> {{ $form->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Si el usuario autenticado no es administrador, podrá observar los formularios
            que pertenezcan a su dependencia -->
            
        <div class="grid grid-cols-3 sm:col-span-2 gap-6 m-8">

            @foreach ($formulario as $form)
                @if (auth()->user()->dependencia == $form->dependencia)
                    <div class="w-full h-36 rounded-3xl border-2 shadow-md">
                        <div class="w-full h-14 p-5">
                            <div class="relative">
                                <a href="{{ url('/template/') . '/' . $form->id }}"
                                    class="text-sm font-medium">{{ $form->titulo }}</a>
                            </div>
                            <hr class="">
                        </div>
                        <div class="w-full h-16 p-5">
                            <p class="text-xs text-gray-400 line-clamp-3"> {{ $form->descripcion }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


    @endif




@endsection

@section('script')
    <script>
        async function obtenerDatosGrafico() {

            // Se obtienen los datos desde el controlador y se convierten en formato JSON
            const datos = @json($datos);

            const ctx = document.getElementById('graficoRespuestas').getContext('2d');
            new Chart(ctx, {
                type: 'pie', // Tipo de grafico, en este caso torta
                data: { // Datos que se representaran
                    labels: datos.labels,
                    datasets: [{
                        label: 'Número de Respuestas',
                        data: datos.data,
                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                }
            });
        }
        obtenerDatosGrafico();
    </script>
@endsection
