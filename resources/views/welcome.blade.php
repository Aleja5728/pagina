<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')

    @yield('cabecera')
</head>

<body>
    <div class="cabecera w-full h-20 mt-1 border-b-4 border-[#3DAE2B] ">
        <header>
            <a href="{{ route('pagina-inicio') }}">
                <img src="{{ asset('img/Alcaldia.png') }}" alt="Logo alcaldía"
                    class="imagen_cabecera w-[13%] text-xs absolute ml-[3%] cursor-pointer">
            </a>
        </header>
    </div>


    @yield('seccion')

    @yield('script')

</body>

</html>
