@extends("welcome")

@section("titulo", "Página de inicio")


@section("seccion")

<!-- Componente de menú -->
<x-menu> </x-menu>

<!-- Componente de información -->
<!-- Componente de información -->
<div class="z-10 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-6 mr-8">
    <x-informacion_formularios :id="'form1'" :titulo="'Formulario 1'" :descripcion="'Descripción 1'" :imagen="'path_to_image_1'"></x-informacion_formularios>
    <x-informacion_formularios :id="'form2'" :titulo="'Formulario 2'" :descripcion="'Descripción 2'" :imagen="'path_to_image_2'"></x-informacion_formularios>
    <x-informacion_formularios :id="'form3'" :titulo="'Formulario 3'" :descripcion="'Descripción 3'" :imagen="'path_to_image_3'"></x-informacion_formularios>
</div>


@endsection
