@extends("Layouts.welcome")

@section("titulo", "Página de inicio")


@section("seccion")

<!-- Componente de menú -->
<x-dropdown-menu> </x-dropdown-menu>

@if( Session::has( 'Exito' ))
<div class="py-4 px-8 m-6 text-sm text-green-800 rounded-lg bg-green-100" role="success">
    {{ Session::get( 'Exito' ) }}
</div>
@endif

<div class="grid grid-cols-3 sm:col-span-2 gap-6 m-8">







    @foreach($formulario as $form)
    @if(auth()->user()->dependencia == $form->dependencia)
    <div class="w-full h-72 rounded-3xl border-2 shadow-md">
        <div class="w-full h-14 p-5">
            <div class="relative">
                <a href="{{ url('/template/').'/'.$form->id }}" class="text-sm font-medium">{{ $form->titulo }}</a>
                <button class="absolute right-0 top-0 ">
                    <img src=" {{ asset('img/puntos.png') }} " alt="Tres puntos" class="w-5 ">
                </button>

            </div>
        </div>
        <div class="w-full h-32 bg-[#EAECEE]">
            <img src="" alt="" class="h-32 w-full bg-contain">
        </div>
        <div class="w-full h-16 p-5">
            <p class="text-xs text-gray-400 line-clamp-3"> {{ $form->descripcion }}</p>
        </div>
    </div>
    @endif
    @endforeach
</div>





@endsection