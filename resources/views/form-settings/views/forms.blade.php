@extends('Layouts.welcome')

<!-- Asignamos el titulo de la página, dependiendo el nombre del formulario al que queramos acceder -->
@section('titulo', $nombre->titulo)

@section('seccion')
<!-- Menú superior derecho -->
<x-dropdown-menu> </x-dropdown-menu>

<div class="relative h-auto bg-[#eeeeee] pt-10 pb-10">
    <div class="w-5/6 m-auto bg-white  pb-24">
        <form action="#" class="p-6 pb-4 bg-white w-[95%] h-auto m-auto relative top-10 text-sm" enctype="multipart/form-data">
            @csrf

            <!-- Accedemos a todos los formularios que se encuentren en la tabla forms -->
            @foreach($formulario as $form)
            <!-- Validamos si el formulario al que accedemos en la URL, concuerda con algún formulario ya creado -->
            @if($form->titulo == $nombre->titulo)
            <div>
                <br>
                <h1 class="uppercase text-center font-bold text-lg p-0 ">{{ $form->titulo   }}</h1><br>
                <h2 class="px-16">{{ $form->descripcion   }}</h2><br>
            </div>

            <!-- Accedemos a las preguntas que se encuentran registradas en la tabla questionsforms -->
            @foreach($preguntasFormulario as $preguntasForm)
            <!-- Validamos cuales preguntas coinciden con el id del formulario, teniendo en cuenta el id_form de la tabla questionsforms -->
            @if($preguntasForm->id_form == $form->id)
            <!-- Accedemos a las preguntas de la tabla questions -->
            @foreach($preguntas as $pregunta)
            <!-- Validamos si el id de las preguntas de la tabla questionsforms, coincide con alguna pregunta de la tabla questions -->
            @if($preguntasForm->id_question == $pregunta->id)

            <div class="flex flex-col  pt-6 px-16">
                <label>
                    {{ $pregunta -> texto_de_pregunta }}
                </label>

                @switch($pregunta->tipo_de_pregunta)

                @case('text')
                <input type="text" name="preguntas[{{ $pregunta->id }}]" class="w-full">
                @break

                @case('number')
                <input type="number" name="preguntas[{{ $pregunta->id }}]" class="w-full">
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
                <textarea name="preguntas[{{ $pregunta->id }}]" class="w-full"></textarea>
                @break

                @case('select')
                <select name="" id="" class="form-control w-full pregunta-principal">
                    <option value="0" disabled selected>Seleccione una opción</option>
                    @foreach ($preguntasDependientes as $select)
                    @if ($select->id_question == $pregunta->id)
                    <option value="{{ $select->id }}">{{ $select -> texto_selects }}</option>
                    @endif
                    @endforeach
                </select>
                @break

                @case('checkbox')

                <div>
                    @foreach ($preguntasDependientes as $select)
                    @if ($select->id_question == $pregunta->id)
                    <br><input type="checkbox" name="preguntas[{{ $pregunta->id }}][]" id="preguntas[{{ $pregunta->id }}]"> {{ $select -> texto_selects }}
                    @endif
                    @endforeach
                </div>

                @break

                @default
                @endswitch

            </div>
            @endif

            @endforeach
            @endif
            @endforeach
            @endif
            @endforeach


            <input type="button" value="Envíar" class="w-[80%] uppercase p-4 ml-[10%] mt-10 bg-[#eeeeee] hover:bg-[#ccc] tracking-wide">
        </form>

    </div>
</div>


@endsection