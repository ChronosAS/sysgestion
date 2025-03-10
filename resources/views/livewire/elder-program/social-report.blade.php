<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Social</title>
     <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" items-center justify-center mx-6">
    <header class="w-full text-center">
        <div class=" py-5 flex items-center justify-around">
            <div>
                <img src="{{ asset('assets/img/escudo-lecheria.webp') }}"  class="w-20 h-20 mx-auto"/>
                <p>Fecha:</p>
                <p class="text-[13px] font-black text-black">{{ now()->format('d/m/Y') }}</p>
            </div>
            <div >
                <img src="{{ asset('assets/img/logo-lecheria-letras.png') }}"  class="w-24 h-24 mx-auto"/>
            </div>
        </div>
        
    </header>

    <main class="p-4 w-full items-center justify-center">
        <div class="overflow-x-auto">
            
        </div>
    </main>

    <footer class="w-full text-center">
       
    </footer>
</body>
</html>