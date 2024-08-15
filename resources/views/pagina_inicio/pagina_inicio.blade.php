@extends("welcome")

@section("titulo", "Página de inicio")


@section("seccion")

<!-- Componente de menú -->
<x-menu> </x-menu>

<!-- Componente de información -->
<div class="z-10 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-6 mr-8">
    
    <x-informacion_formularios></x-informacion_formularios>
    <x-informacion_formularios></x-informacion_formularios>
    <x-informacion_formularios></x-informacion_formularios>
    
</div>

@endsection
