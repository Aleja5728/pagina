@extends('Layouts.welcome')

<!-- Asignamos el titulo de la página, dependiendo el nombre del formulario al que queramos acceder -->
@section('titulo', $nombre->titulo)

@section('seccion')
    <!-- Menú superior derecho -->
    <x-dropdown-menu> </x-dropdown-menu>



    <div class="relative h-auto bg-[#eeeeee] pt-10 pb-10">
        <div class="w-5/6 m-auto bg-white  pb-24">
            
            
            <form action="{{ route('respuesta_formularios') }}" method="post"
                class="p-6 pb-4 bg-white w-[95%] h-auto m-auto relative top-10 text-sm" enctype="multipart/form-data">
                @csrf


                @if ($errors->any())
                    <div class="py-4 px-8 m-6 text-sm text-red-800 rounded-lg bg-red-50" role="warning">
                        Rellena todos los campos
                    </div>
                @endif

                <!-- Accedemos a todos los formularios que se encuentren en la tabla forms -->
                <!-- Validamos si el formulario al que accedemos en la URL, concuerda con algún formulario ya creado -->
                <!-- Accedemos a las preguntas que se encuentran registradas en la tabla questionsforms -->
                <!-- Validamos cuales preguntas coinciden con el id del formulario, teniendo en cuenta el id_form de la tabla questionsforms -->
                <!-- Accedemos a las preguntas de la tabla questions -->
                <!-- Validamos si el id de las preguntas de la tabla questionsforms, coincide con alguna pregunta de la tabla questions -->
                @foreach ($formulario as $form)
                    @if ($form->titulo == $nombre->titulo)
                        <div>

                            <input type="hidden" name="id_form" value="{{ $form->id }}">
                            <br>
                            <h1 class="uppercase text-center font-bold text-lg p-0">
                                {{ $form->titulo }}</h1><br>
                            <h2 class="px-16" style="white-space: pre-wrap;">{{ $form->descripcion }}</h2><br>
                        </div>

                        @foreach ($preguntasFormulario as $preguntasForm)
                            @if ($preguntasForm->id_form == $form->id)
                                @foreach ($preguntas as $pregunta)
                                    @if ($preguntasForm->id_question == $pregunta->id)
                                        <div class="flex flex-col  pt-6 px-16">
                                            <label>
                                                {{ $pregunta->texto_de_pregunta }}
                                            </label>

                                            @switch($pregunta->tipo_de_pregunta)
                                                @case('text')
                                                    <input type="text" name="respuesta[{{ $pregunta->id }}]" class="w-full">
                                                @break

                                                @case('number')
                                                    <input type="number" name="respuesta[{{ $pregunta->id }}]" class="w-full">
                                                @break

                                                @case('date')
                                                    <input type="date" name="respuesta[{{ $pregunta->id }}]"
                                                        class="form-control w-full">
                                                @break

                                                @case('time')
                                                    <input type="time" name="respuesta[{{ $pregunta->id }}]"
                                                        class="form-control w-full">
                                                @break

                                                @case('email')
                                                    <input type="email" name="respuesta[{{ $pregunta->id }}]"
                                                        class="form-control w-full">
                                                @break

                                                @case('textarea')
                                                    <textarea name="respuesta[{{ $pregunta->id }}]" class="w-full"></textarea>
                                                @break

                                                @case('select')
                                                    <select name="respuesta[{{ $pregunta->id }}]" id=""
                                                        class="form-control w-full pregunta-principal">
                                                        <option value="0" disabled selected>Seleccione una opción</option>
                                                        @foreach ($preguntasDependientes as $select)
                                                            @if ($select->id_question == $pregunta->id)
                                                                <option value="{{ $select->texto_selects }}">
                                                                    {{ $select->texto_selects }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @break

                                                @case('checkbox')
                                                    <div>
                                                        @foreach ($preguntasDependientes as $select)
                                                            @if ($select->id_question == $pregunta->id)
                                                                <br><input type="checkbox" name="respuesta[{{ $pregunta->id }}][]"
                                                                    id="respuesta[{{ $pregunta->id }}]"
                                                                    value="{{ $select->texto_selects }}">
                                                                {{ $select->texto_selects }}
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


                <input type="submit" value="Envíar"
                    class="w-[80%] uppercase p-4 ml-[10%] mt-10 bg-[#eeeeee] hover:bg-[#ccc] tracking-wide">
            </form>

        </div>
    </div>

    @session('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $value }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
@endsection
