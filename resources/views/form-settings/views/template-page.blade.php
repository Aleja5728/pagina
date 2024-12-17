@extends('Layouts.welcome')

@section('titulo', 'plantilla')

@section('cabecera')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                <form action="{{ route('template.crearFormulario') }}" method="post" class="form p-2 pb-10 bg-white w-[95%] h-auto m-auto relative top-10 text-sm " ondrop="" enctype="multipart/form-data">
                    @csrf
                    @error('titulo')
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                        {{ $message }}
                    </div>
                    @enderror



                    <div class="flex flex-col place-items-center ">
                        <textarea name="titulo" id="hs-default-height-with-autoheight-script" class="border-none p-0 pt-2 uppercase w-full text-center font-bold focus:ring-0 resize-none overflow-hidden"> Titulo del formulario </textarea>
                        <textarea name="descripcion" id="hs-default-height-with-autoheight-script2" class="border-none p-0 pb-4 w-full text-sm focus:ring-0 resize-none overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae illo nam, rerum maxime porro dolores magnam cumque ex magni natus voluptatum dolore veritatis ad dignissimos obcaecati facere delectus sapiente?</textarea>
                    </div>

                    <div class="contenedor flex flex-col gap-y-6 pt-6" id="formulario">
                        @foreach ($preguntas as $pregunta)
                        <div class="form-group">
                            <label class="uppercase">
                                {{ $pregunta->texto_de_pregunta}}
                                <input type="checkbox" name="preguntas[{{ $pregunta->id }}]" class="absolute right-5" value="{{ $pregunta->id }}"
                                    @if ($pregunta -> visible) checked @endif >
                            </label>

                            @switch($pregunta->tipo_de_pregunta)

                            @case('text')
                            <input type="text" class="w-full">
                            @break

                            @case('number')
                            <input type="number" class="w-full">
                            @break

                            @case('select')
                            <select id="preguntas[{{ $pregunta->id }}]" class="form-control w-full ">
                                <option value="0" disabled selected>Seleccione una opción</option>
                                @foreach ($selects as $select)
                                @if ($select->id_question == $pregunta->id)
                                <option value="{{ $select->texto_selects }}" class="uppercase">{{ $select -> texto_selects }}</option>
                                @endif
                                @endforeach
                            </select>
                            @break

                            @case('date')
                            <input type="date" class="form-control w-full">
                            @break

                            @case('time')
                            <input type="time" class="form-control w-full">
                            @break

                            @case('image')
                            <input type="file" class="form-control w-full">
                            @break

                            @case('email')
                            <input type="email" class="form-control w-full">
                            @break

                            @case('textarea')
                            <textarea class="w-full"></textarea>
                            @break

                            @case('checkbox')
                            <br>
                            @foreach ($selects as $select)
                            @if ($select->id_question == $pregunta->id)
                            <br><input type="checkbox" id="preguntas[{{ $pregunta->id }}]" class="uppercase"> {{ $select -> texto_selects }}
                            @endif
                            @endforeach

                            @break


                            @default
                            @endswitch

                        </div>

                        @endforeach

                        @if(auth()->user()->dependencia == 'secretaria de educacion')

                        @endif

                        <div id="espacioNuevoCampo" class="nuevoCampo">

                        </div>
                        <div class="w-full h-20 mt-5 border-2 border-dashed border-gray-400 flex items-center justify-center" id="zonaDrop">
                            <span class="text-gray-600">Suelta aquí</span>
                        </div>


                    </div>

                    <input type="submit" value="Crear" class="w-full uppercase p-4 mt-6 bg-[#eeeeee] hover:bg-[#ccc] tracking-wide">

                </form>
            </div>
        </div>

        <!-- Creación de nuevos campos -->
        <div class="fixed w-1/5 bg-white bg-fixed ml-2 rounded-xl h-4/5 border-4">

            <div class="flex flex-col p-5 gap-y-6 pt-36">
                <button type="button" id="botonAreaDeTexto" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Area de texto </button>
                <button type="button" id="botonTexto" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Texto </button>
                <button type="button" id="botonNumber" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Número </button>
                <button type="button" id="botonSelect" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Selección </button>
                <button type="button" id="botonDate" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Fecha </button>
                <button type="button" id="botonImage" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Imagen </button>
                <button type="button" id="botonCheck" draggable="true" class="w-full h-10 rounded-md bg-gray-100 cursor-move"> Checkbox </button>
            </div>

            <div>
                <p class="text-gray-400 p-6 text-sm">™ Recarga la página después de crear el nuevo campo</p>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')

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

<!-- Script para drag and drop -->
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
        {
            id: 'botonCheck',
            type: 'checkbox'
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

    // Función para agregar campo visualmente
    function agregarCampo(type) {
        const espacioNuevo = document.getElementById('espacioNuevoCampo');
        const newField = document.createElement('div');
        let textoPregunta = prompt("Ingresa el texto de la pregunta");
        newField.classList.add('nuevoCampo');


        if (textoPregunta !== null && textoPregunta !== '') {

            if (type === 'textarea') {
                newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}   
                        <textarea class="w-full m-0"></textarea>
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    <button type="button" onclick="guardarPregunta('${textoPregunta}','${type}')">Guardar</button>
                    `;
            } else if (type === 'text') {
                newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <input type="text" class="w-full">
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    <button type="button" onclick="guardarPregunta('${textoPregunta}','${type}')">Guardar</button>
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
                        opcionesInner += `<option class="uppercase"> ${valor} </option>`
                    })

                    newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <select class="w-full">
                                <option value="defecto" >Seleccione una opción</option>
                                ${opcionesInner}
                            </select>
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    `;
                    // Crear el botón Guardar programáticamente
                    const botonGuardar = document.createElement('button');
                    botonGuardar.type = "button";
                    botonGuardar.innerText = "Guardar";
                    botonGuardar.addEventListener('click', function() {
                        guardarPregunta(textoPregunta, type, valores);
                    });

                    // Añadir el botón Guardar al newField
                    newField.appendChild(botonGuardar);
                }
            } else if (type === 'checkbox') {
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
                        opcionesInner += `<br><input type="checkbox"> ${valor}`
                    })

                    newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <br>
                                ${opcionesInner}
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    `;
                    // Crear el botón Guardar programáticamente
                    const botonGuardar = document.createElement('button');
                    botonGuardar.type = "button";
                    botonGuardar.innerText = "Guardar";
                    botonGuardar.addEventListener('click', function() {
                        guardarPregunta(textoPregunta, type, valores);
                    });

                    // Añadir el botón Guardar al newField
                    newField.appendChild(botonGuardar);
                }
            } else if (type === 'number') {
                newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <input type="number" class="w-full">
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    <button type="button" onclick="guardarPregunta('${textoPregunta}','${type}')">Guardar</button>
                    `;
            } else if (type === 'date') {
                newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <input type="date" class="w-full">
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    <button type="button" onclick="guardarPregunta('${textoPregunta}','${type}')">Guardar</button>
                    `;
            } else if (type === 'image') {
                newField.innerHTML = `
                    <div class="field-input mt-3">
                        <label class="uppercase"> 
                            ${textoPregunta}
                            <input type="file" class="w-full">
                        </label>
                    </div>
                    <button type="button" onclick="removeField(this)">Eliminar</button>
                    <button type="button" onclick="guardarPregunta('${textoPregunta}','${type}')">Guardar</button>
                    `;
            }
            espacioNuevo.appendChild(newField);
        }
    }

    // Función para agregar campo creado a la base de datos
    async function guardarPregunta(textoPregunta, tipo, opciones = []) {
        const preguntaData = {
            texto_de_pregunta: textoPregunta,
            tipo_de_pregunta: tipo,
            texto_selects: opciones || null,
        };

        try {
            const response = await fetch('{{ route("template.guardarPreguntas") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(preguntaData)
            });

            if (response.ok) {
                alert('Pregunta guardada exitosamente en la base de datos');
            } else {
                console.error('Error en la respuesta:', response.statusText);
            }
        } catch (error) {
            console.error('Error en la solicitud:', error);
        }

    }


    function removeField(button) {
        button.parentElement.remove();
    }
</script>

@endsection