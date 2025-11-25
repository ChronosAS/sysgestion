<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet</title>
     <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body >
    <div style="width: 486px; height: 306px; background-image: url({{ asset('pdf/elder-program/assets/carnet-fondo.png') }}); " class=" bg-contain relative overflow-hidden">
        <header class="text-center right-3.5 absolute">
            <h1 class="text-[11px] font-black">ALCALDÍA DEL MUNICIPIO TURISTICO “EL MORRO” <br> LIC. DIEGO BAUTISTA URBANEJA</h1>
        </header>
        <div class="absolute top-1  left-[67.5px] ">
            <!-- logo de lecheria sobre la foto -->
            <img  class=" w-[74px] " src="{{ asset('pdf/elder-program/assets/logotipo-lecheria-blanco.png') }}" />
        </div>
        <div class="absolute top-16  -left-32">
        <!-- logo detras del cuadro de la foto -->
            <img  class=" w-[300px] opacity-25" src="{{ asset('pdf/elder-program/assets/logo-sin-letras.png') }}" />
        </div>
        <div class="absolute top-20  left-9">
        <!-- cuadro de la foto -->
            @if($citizen->getFirstMedia('profile'))
                <img class="max-w-[135px] min-w-[98.26px] max-h-[155px] min-h-[155px] rounded-xl" src="{{ $citizen->getFirstMedia('profile')->getUrl() }}" />
            @else
                <img class="max-w-[135px] min-w-[98.26px] max-h-[155px] min-h-[155px] rounded-xl" src="{{ asset('path/to/default/image.png') }}" />
            @endif
        </div>
        <div class=" absolute right-12 top-9">
        <!-- logo de abuelos de lecheria debajo del header de alcaldia -->
            <img  class=" w-44" src="{{ asset('pdf/elder-program/assets/logo-abuelo-lecheria.png') }}" />
        </div>
        <main class=" justify-center items-center absolute top-28  right-[40px] mr-[40px]  block">
            <div class=" ">
                <p class="text-[10px] font-[1000] -ml-10 -mr-1  mx-auto" style=" color: #0c558c;">Nombres</p>
                <p class="text-[15px] font-[1000] -ml-10 -mr-1 mx-auto">{{ Str::upper($citizen->first_names) }}</p>
                <p class="text-[10px] font-[1000] -ml-10 -mr-1 mx-auto" style=" color: #0c558c;">Apellidos:</p>
                <p class="text-[15px] font-[1000] -ml-10 -mr-1 mx-auto">{{ Str::upper($citizen->last_names) }}</p>
                <p class="text-[10px] font-[1000] -ml-10 -mr-1 mx-auto" style=" color: #0c558c;">Cédula de Identidad:</p>
                <p class="text-[15px] font-[1000] -ml-10 -mr-1 mx-auto">{{ Str::upper($citizen->document) }}</p>
            </div>
        </main>
         <!-- Escudo de lecheria como marca de agua -->
        <div class=" " >
            <img class=" absolute top-20 inset-y-0 -right-12 w-[175px] opacity-10 " src="{{ asset('pdf/elder-program/assets/escudo.png') }}"/>
        </div>
        <div class="absolute bottom-8 left-10  ">
            <footer class="text-center  flex  flex-row items-center justify-center space-x-16">
                <p class="text-xs font-black text-slate-300">Fecha de Expedición:</p>
                <p class="text-[13px] font-black text-sky-950">Dirección:</p>
            </footer>
        </div>
        <div class="absolute bottom-3  ml-10  mx-auto right-20  ">
            <p class="text-xs break-all text-slate-300">{{ $citizen->address }}</p>
        </div>
        <div class="absolute bottom-3 left-10">
            <p class="text-[13px] font-black text-slate-300">{{ now()->format('d/m/Y') }}</p>
        </div>


        <div class="absolute bottom-0 right-3">
        <!-- logo de gestion social -->
            <img  class="w-14" src="{{ asset('pdf/elder-program/assets/logo-gestion-social.png') }}" />
        </div>
    </div>

</body>
</html>
