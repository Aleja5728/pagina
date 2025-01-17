@extends('Layouts.welcome')

@section('titulo', 'Página de inicio')

@section('cabecera')
    <style>
        body {
            background-color: #fbfbfb;
            margin-bottom: 6vh;
        }
    </style>
@endsection

@section('seccion')

    <!-- Componente de menú -->
    <x-dropdown-menu> </x-dropdown-menu>


    <!-- Condición para mostrar mensaje de éxito en caso de que se haya creado un formulario correctamente -->
    @if (Session::has('Exito'))
        <div class="py-4 px-8 m-6 text-sm text-green-800 rounded-lg bg-green-100" role="success">
            <strong>{{ Session::get('Exito') }}</strong>
        </div>
    @endif



    @if (auth()->user()->rol == 'Administrador')
        <!-- Vista para el Administrador -->
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6 px-4">
            <!-- Gráfico de Formularios por Dependencias -->
            <div class="relative bg-white rounded-md shadow-md p-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-3 text-center">
                    Gráfico de Formularios por Dependencias
                </h2>
                <div class="flex justify-center w-48" id="graficoDeFormularios">
                    <!-- Tamaño reducido del canvas -->
                    <canvas id="grafico" width="150" height="150" class="w-40 h-40"></canvas>
                </div>
                <div class="absolute top-3 right-3">
                    <button id="botonDeFormularios"
                        class="px-3 py-1 text-sm bg-blue-500 text-white rounded-md hover:bg-blue-600 transition"
                        onclick="BotonFormularios()">Mostrar Lista</button>
                </div>
                <div id="listaDeFormularios" class="mt-2" style="display:none;">
                    <ul id="dataListFormularios" class="list-disc list-inside text-gray-600 text-sm"></ul>
                </div>
            </div>

            <!-- Gráfico de Respuestas por Formularios -->
            <div class="relative bg-white rounded-md shadow-md p-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-3 text-center">
                    Gráfico de Respuestas por Formulario
                </h2>
                <div class="flex justify-center w-48" id="graficoDeRespuestas">
                    <canvas id="graficoRespuestas" width="150" height="150" class="w-40 h-40"></canvas>
                </div>
                <div class="absolute top-3 right-3">
                    <button id="botonDeRespuestas"
                        class="px-3 py-1 text-sm bg-blue-500 text-white rounded-md hover:bg-blue-600 transition"
                        onclick="BotonRespuestas()">Mostrar Lista</button>
                </div>
                <div id="listaDeRespuestas" class="mt-2" style="display:none;">
                    <ul id="dataListRespuestas" class="list-disc list-inside text-gray-600 text-sm"></ul>
                </div>
            </div>
        </div>

        <!-- Tarjetas de Formularios -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 px-8">
            @foreach ($formulario as $form)
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg border border-gray-200 p-6 transition">
                    <h3 class="text-lg font-semibold text-gray-800 truncate">
                        <a href="{{ url('/template/') . '/' . $form->id }}" class="hover:text-blue-600">
                            {{ $form->titulo }}
                        </a>
                    </h3>
                    <hr class="my-4">
                    <p class="text-sm text-gray-600 line-clamp-3">{{ $form->descripcion }}</p>
                </div>
            @endforeach
        </div>
    @else
        <!-- Vista para Usuarios no Administradores -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 px-8">
            @foreach ($formulario as $form)
                @if (auth()->user()->dependencia->id == $form->dependencia)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg border border-gray-200 p-6 transition">
                        <h3 class="text-lg font-semibold text-gray-800 truncate">
                            <a href="{{ url('/template/') . '/' . $form->id }}" class="hover:text-blue-600">
                                {{ $form->titulo }}
                            </a>
                        </h3>
                        <hr class="my-4">
                        <p class="text-sm text-gray-600 line-clamp-3">{{ $form->descripcion }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    @endif





@endsection

@section('script')
    <script>
        // Se obtienen los datos desde el controlador y se convierten en formato JSON
        const datos = @json($datos);
        const total = @json($totalFormularios);

        // Función para agregar los datos para los gráficos
        async function obtenerDatosGrafico() {

            // Gráfico de número de formularios por dependencia
            const totalFormularios = document.getElementById('grafico').getContext('2d');
            new Chart(totalFormularios, {
                type: 'doughnut', // Tipo de grafico, en este caso torta
                data: { // Datos que se representaran
                    labels: total.labels,
                    datasets: [{
                        label: 'Número de Formularios',
                        data: total.data,
                        borderColor: ['#fff'],
                        backgroundColor: getColor(),
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });


            // Gráfico de número de respuestas por formularios
            const totalRespuestas = document.getElementById('graficoRespuestas').getContext('2d');
            new Chart(totalRespuestas, {
                type: 'doughnut', // Tipo de grafico, en este caso torta
                data: { // Datos que se representaran
                    labels: datos.labels,
                    datasets: [{
                        label: 'Número de Respuestas',
                        data: datos.data,
                        borderColor: ['#fff'],
                        backgroundColor: getColor(),
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }

        // Función que guarda la paleta de colores para los gráficos
        const getColor = opacity => {
            const colors = [
                'rgb(75, 153, 253)', // Azul
                'rgb(253, 234, 75)', // Amarillo
                'rgb(75, 253, 159)', // Verde menta
                'rgb(255, 183, 79)', // Naranja claro
                'rgb(228, 85, 255)', // Violeta
                'rgb(0, 204, 255)', // Cian
                'rgb(255, 94, 77)', // Rojo coral
                'rgb(255, 103, 215)', // Rosa
                'rgb(50, 205, 50)', // Verde lima
                'rgb(153, 102, 255)' // Púrpura
            ];
            const uniqueColors = [...new Set(colors)];

            return uniqueColors.map(rgb =>
                opacity ? rgb.replace('rgb', 'rgba').replace(')', `, ${opacity})`) : rgb
            );
        }

        // Se llama a la función que define los gráficos
        obtenerDatosGrafico();

        // Funciones para crear lista con los datos del gráfico de respuestas por formularios
        function ListaFormularios() {

            const dataList = document.getElementById('dataListFormularios');

            // Datos del gráfico 
            const labels = total.labels;
            const data = total.data;

            // Limpiar lista
            dataList.innerHTML = '';


            labels.forEach((label, index) => {
                const listItem = document.createElement('li');

                // Aplica negrita al label
                const boldLabel = document.createElement('span');
                boldLabel.textContent = `${label}: `;
                boldLabel.style.fontWeight = 'bold';

                // Agrega los datos
                const dataText = document.createTextNode(`${data[index]} formularios creados`);

                // Agrega el label y los datos como items de una lista
                listItem.appendChild(boldLabel);
                listItem.appendChild(dataText);

                // Agrega los elementos una la lista 
                dataList.appendChild(listItem);
            });
        }

        function ListaRespuestas() {

            const dataList = document.getElementById('dataListRespuestas');

            // Datos del gráfico 
            const labels = datos.labels;
            const data = datos.data;

            // Limpiar lista
            dataList.innerHTML = '';


            labels.forEach((label, index) => {
                const listItem = document.createElement('li');

                // Aplica negrita al label
                const boldLabel = document.createElement('span');
                boldLabel.textContent = `${label}: `;
                boldLabel.style.fontWeight = 'bold';

                // Agrega los datos
                const dataText = document.createTextNode(`${data[index]} respuestas`);

                // Agrega el label y los datos como items de una lista
                listItem.appendChild(boldLabel);
                listItem.appendChild(dataText);

                // Agrega los elementos una la lista 
                dataList.appendChild(listItem);
            });
        }


        // Funciones para mostrar los datos de los gráficos, en una lista
        function BotonFormularios() {

            const chartContainer = document.getElementById('graficoDeFormularios');
            const listContainer = document.getElementById('listaDeFormularios');
            const toggleButton = document.getElementById('botonDeFormularios');

            if (chartContainer.style.display === 'none') {
                chartContainer.style.display = 'block';
                listContainer.style.display = 'none';
                toggleButton.textContent = 'Mostrar Lista';
            } else {
                chartContainer.style.display = 'none';
                listContainer.style.display = 'block';
                toggleButton.textContent = 'Mostrar Gráfico';

                // Llama a la función que define la lista
                ListaFormularios();
            }
        }

        function BotonRespuestas() {

            const chartContainer = document.getElementById('graficoDeRespuestas');
            const listContainer = document.getElementById('listaDeRespuestas');
            const toggleButton = document.getElementById('botonDeRespuestas');

            if (chartContainer.style.display === 'none') {
                chartContainer.style.display = 'block';
                listContainer.style.display = 'none';
                toggleButton.textContent = 'Mostrar Lista';
            } else {
                chartContainer.style.display = 'none';
                listContainer.style.display = 'block';
                toggleButton.textContent = 'Mostrar Gráfico';

                // Llama a la función que define la lista
                ListaRespuestas();
            }
        }
    </script>
@endsection
