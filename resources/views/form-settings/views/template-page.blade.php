@extends('Layouts.welcome')

@section('titulo', 'plantilla')

@section('cabecera')
<style>
    body {
        background-color: #eeeeee;
    }

    .dragging {
        opacity: 0.5;
    }

    .span {
        color: blue;
    }
</style>
@endsection

@section('seccion')

<!-- Menú superior derecho -->
<x-dropdown-menu> </x-dropdown-menu>

<div>

    <div class="relative h-auto">

        <div class="z-10 w-4/5 h-48 bg-fixed absolute right-0"> <!--Color de fondo-->

            <div class="m-auto static w-full h-auto">
                <form action="#" method="post" class=" p-2 pb-10 bg-white w-[95%] h-auto m-auto relative top-10 text-sm " ondrop="" enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-col place-items-center ">
                        <textarea name="tituloFormulario" id="hs-default-height-with-autoheight-script" class="border-none p-0 pt-2 uppercase w-full text-center font-bold focus:ring-0 resize-none overflow-hidden"> Titulo del formulario </textarea>
                        <textarea name="descripcionFormulario" id="hs-default-height-with-autoheight-script2" class="border-none p-0 pb-4 w-full text-sm focus:ring-0 resize-none overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae illo nam, rerum maxime porro dolores magnam cumque ex magni natus voluptatum dolore veritatis ad dignissimos obcaecati facere delectus sapiente?</textarea>
                    </div>

                    <div class="contenedor flex flex-col gap-y-6 pt-6" id="formulario">
                        @foreach ($preguntas as $pregunta)
                        <div class="form-group">
                            <label>{{ $pregunta->texto_de_pregunta}}</label>

                            @switch($pregunta->tipo_de_pregunta)

                            @case('text')
                            <input type="text" name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                            @break

                            @case('number')
                            <input type="number" name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                            @break

                            @case('select')
                            <select name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                                <option value="defecto">Seleccione una opción</option>
                                @foreach ($selects as $select)
                                @if ($select->id_question == $pregunta->id)
                                <option value="{{ $select -> opcion }}">{{ $select -> opcion }}</option>
                                @endif
                                @endforeach
                            </select>
                            @break

                            @case('date')
                            <input type="date" name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                            @break

                            @case('time')
                            <input type="time" name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                            @break

                            @case('email')
                            <input type="email" name="preguntas[{{ $pregunta->id }}]" class="form-control w-full">
                            @break

                            @case('textarea')
                            <textarea name="preguntas[{{ $pregunta->id }}]" id="" class="w-full"></textarea>
                            @break

                            @case('checkbox')
                            <br>
                            @foreach ($selects as $select)
                            @if ($select->id_question == $pregunta->id)
                            <br><input type="checkbox" name="{{ $select -> opcion }}" id=""> {{ $select -> opcion }}
                            @endif
                            @endforeach
                            @break


                            @default
                            @endswitch
                        </div>
                        @endforeach

                        @if(auth()->user()->dependencia == 'secretaria de educacion')

                        @else

                        @endif

                        <div id="espacioNuevoCampo" class="nuevoCampo">

                        </div>
                        <div class="w-full h-20 mt-5 border-2 border-dashed border-gray-400 flex items-center justify-center" id="zonaDrop">
                            <span class="text-gray-600">Suelta aquí</span>
                        </div>


                    </div>

                </form>
            </div>
        </div>


        <div class="fixed w-1/5 bg-white bg-fixed ml-2 rounded-xl h-4/5 border-4">
            <div class="flex flex-col p-5 gap-y-4 pt-20">
                <button type="button" id="botonAreaDeTexto" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Area de texto </button>
                <button type="button" id="botonTexto" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Texto </button>
                <button type="button" id="botonNumber" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Número </button>
                <button type="button" id="botonSelect" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Selección </button>
                <button type="button" id="botonDate" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Fecha </button>
                <button type="button" id="botonImage" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Imagen </button>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')

<!-- Script para ocultar y mostrar secciones -->
<script>
    const botones = document.querySelectorAll('button');
    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            const targetId = this.dataset.target; // Accedemos al data-target
            const seccion = document.getElementById(targetId);
            if (seccion) {
                // Alternar la visibilidad de la sección
                if (seccion.style.display === 'none' || seccion.style.display === '') {
                    seccion.style.display = 'block'; // Mostramos la sección
                    this.textContent = 'Ocultar sección'; // Cambiamos el texto del botón
                    // Habilitar inputs
                    const inputs = seccion.querySelectorAll('input, textarea, select');
                    inputs.forEach(input => {
                        input.disabled = false; // Habilitar el campo
                    });
                } else {
                    seccion.style.display = 'none'; // Ocultamos la sección
                    this.textContent = `Mostrar sección`; // Restauramos el texto

                    // Deshabilitar inputs
                    const inputs = seccion.querySelectorAll('input, textarea, select');
                    inputs.forEach(input => {
                        input.disabled = true; // Deshabilitar el campo
                    });
                }
            }
        });
    });
</script>

<!-- Script para autoajustar area de texto -->
<script src="https://preline.co/assets/js/hs-textarea-autoheight.js"></script>
<script>
    window.addEventListener('load', () => {
        (function() {
            const textAreas = [
                '#hs-default-height-with-autoheight-script',
                '#hs-default-height-with-autoheight-script2',
                '#temaDeGusto'
            ];
            textareaAutoHeight(textAreas);
        })();
    });
</script>

<!-- Script para modificar posición de campos -->
<!-- jsDelivr :: Sortable :: Latest (https://www.jsdelivr.com/package/npm/sortablejs) -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    new Sortable(formulario, {
        animation: 150,
        ghostClass: 'bg-blue-50',
        store: {
            set: function(sortable) {
                const sorts = sortable.toArray();
                console.log(sorts);
            }
        }
    });
</script>

<script>
    function mostrarTipoCiudadano() {
        const tipoDeCuidadano = document.getElementById('tipoDeCuidadano');
        const prestador = document.getElementById('prestadorDeServicios');
        const turista = document.getElementById('turista');

        if (tipoDeCuidadano.value === 'PRESTADOR DE SERVICIOS TURISTICOS') {
            prestador.style.display = 'block';
            turista.style.display = 'none';
        } else if (tipoDeCuidadano.value === 'TURISTA') {
            turista.style.display = 'block';
            prestador.style.display = 'none';
        } else {
            turista.style.display = 'none';
            prestador.style.display = 'none';
        }
    }

    function mostrarInput(selectId, inputId) {
        const select = document.getElementById(selectId);
        const input = document.getElementById(inputId);

        if (select.value === 'OTRO') {
            input.style.display = 'block';
        } else {
            input.style.display = 'none';
        }
    }

    function mostrarTipoDeSociedad() {
        const tipoDeConstitucion = document.getElementById('tipoDeConstitucion');
        const tipoDeSociedad = document.getElementById('tipoDeSociedad');

        if (tipoDeConstitucion.value === 'PERSONA JURIDICA') {
            tipoDeSociedad.style.display = 'block';
        } else
            tipoDeSociedad.style.display = 'none';
    }

    function mostrarSectorDeEmpresa() {
        const sectorDeEmpresa = document.getElementById('sectorDeEmpresa');
        const sectorPrimario = document.getElementById('sectorPrimario');
        const sectorSecundario = document.getElementById('sectorSecundario');
        const sectorTerciario = document.getElementById('sectorTerciario');

        if (sectorDeEmpresa.value === 'PRIMARIO') {
            sectorPrimario.style.display = 'block';
            sectorSecundario.style.display = 'none';
            sectorTerciario.style.display = 'none';
        } else if (sectorDeEmpresa.value === 'SECUNDARIO') {
            sectorPrimario.style.display = 'none';
            sectorSecundario.style.display = 'block';
            sectorTerciario.style.display = 'none';
        } else if (sectorDeEmpresa.value === 'TERCIARIO') {
            sectorPrimario.style.display = 'none';
            sectorSecundario.style.display = 'none';
            sectorTerciario.style.display = 'block';
        } else {
            sectorPrimario.style.display = 'none';
            sectorSecundario.style.display = 'none';
            sectorTerciario.style.display = 'block';
        }
    }

    function mostrarEmpleos() {
        const cuantosEmpleosGenera = document.getElementById('cuantosEmpleosGenera');
        const queEmpleosGenera = document.getElementById('queEmpleosGenera');

        if (cuantosEmpleosGenera.value === 'NINGUNO') {
            queEmpleosGenera.style.display = 'none';
        } else
            queEmpleosGenera.style.display = 'block';
    }

    function mostrarInputSi(IdSelect, IdInput) {
        const select = document.getElementById(IdSelect);
        const input = document.getElementById(IdInput);

        if (select.value === 'SI') {
            input.style.display = 'block';
        } else {
            input.style.display = 'none';
        }
    }

    function mostrarInputNo(IdSelect1, IdInput1) {
        const select1 = document.getElementById(IdSelect1);
        const input1 = document.getElementById(IdInput1);

        if (select1.value === 'NO') {
            input1.style.display = 'block';
        } else {
            input1.style.display = 'none';
        }
    }
</script>

<script>
    // Definición de variables
    const zonaDrop = document.getElementById('zonaDrop')
    const botonAreaDeTexto = document.getElementById('botonAreaDeTexto');
    const botonTexto = document.getElementById('botonTexto');
    const botonSelect = document.getElementById('botonSelect');

    const agregados = [{
            id: 'botonAreaDeTexto',
            type: 'textarea'
        },
        {
            id: 'botonTexto',
            type: 'text'
        },
        {
            id: 'botonNumber',
            type: 'number'
        },
        {
            id: 'botonSelect',
            type: 'select'
        },
        {
            id: 'botonDate',
            type: 'date'
        },
        {
            id: 'botonImage',
            type: 'image'
        },
    ];

    agregados.forEach(agregado => {
        const botonElement = document.getElementById(agregado.id);

        botonElement.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('text/plain', agregado.type);
            botonElement.classList.add('dragging');
        });
        botonElement.addEventListener('dragend', () => {
            botonElement.classList.remove('dragging');
        });
    });


    zonaDrop.addEventListener('dragover', (e) => {
        e.preventDefault();
        zonaDrop.classList.add('border-blue-500', 'bg-blue-50');
    });
    zonaDrop.addEventListener('dragleave', () => {
        zonaDrop.classList.remove('border-blue-500');
    });

    zonaDrop.addEventListener('drop', (e) => {
        const fieldType = e.dataTransfer.getData('text/plain');
        zonaDrop.classList.remove('border-blue-500', 'bg-blue-50');
        agregarCampo(fieldType);
        e.preventDefault();
    });

    function agregarCampo(type) {
        const espacioNuevo = document.getElementById('espacioNuevoCampo');
        const newField = document.createElement('div');
        newField.classList.add('nuevoCampo');

        if (type === 'textarea') {
            newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <textarea class="w-full m-0"></textarea>
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
        } else if (type === 'text') {
            newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <input type="text" class="w-full">
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
        } else if (type === 'select') {
            let numeroDeOpciones = prompt("¿Cuantas opciones desea agregar?");
            if (numeroDeOpciones !== null && numeroDeOpciones !== '') {
                var valorSelect;
                var valores = [];
                let opcionesInner = "";
                for (let i = 0; i < numeroDeOpciones; i++) {
                    valorSelect = prompt("Digite la opción");
                    valores.push(valorSelect);
                }

                valores.forEach(function(valor) {
                    opcionesInner += `<option> ${valor} </option>`
                })

                newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <select class="w-full">
                            <option value="defecto">Seleccione una opción</option>
                            ${opcionesInner}
                        </select>
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
            }
        } else if (type === 'number') {
            newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <input type="number" class="w-full">
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
        } else if (type === 'date') {
            newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <input type="date" class="w-full">
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
        } else if (type === 'image') {
            newField.innerHTML = `
                 <div class="field-input mt-3">
                    <label> 
                        <textarea name="descripcionFormulario" class="border-none p-0 w-full h-6 text-sm uppercase focus:ring-0 resize-none overflow-hidden" placeholder="Ingresa la pregunta"></textarea>
                        <input type="file" class="w-full">
                    </label>
                </div>
                 <button type="button" onclick="removeField(this)">Eliminar</button>
                `;
        }
        espacioNuevo.appendChild(newField);
    }

    function removeField(button) {
        button.parentElement.remove();
    }
</script>

@endsection