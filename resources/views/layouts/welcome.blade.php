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
    <div class="cabecera w-full h-20 border-b-4 border-[#3DAE2B] select-none bg-white">
        <header>
            <a href="{{ route('home-page') }}">
                <img src="{{ asset('img/Alcaldia.png') }}" alt="Logo alcaldía"
                    class="imagen_cabecera w-36 sm:w-44 text-xs absolute sm:mt-2 mt-4 ml-5 cursor-pointer mt-3">
            </a>
        </header>
    </div>


    @yield('seccion')

    @yield('script')

</body>

</html>
