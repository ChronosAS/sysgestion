<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoja De Servicio</title>
        <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <div style="width: 50vw; height: 75vh; background-image: url({{ asset('pdf/technology-and-systems/assets/service-sheet.jpg') }}); background-size: cover; background-position: center;" class="relative overflow-hidden">
            <header class="text-center  absolute">
            </header>
            <main class=" justify-center items-center absolute   block">
            </main>
            <footer class="text-center  flex  flex-row items-center justify-center space-x-16">
            </footer>
        </div>
    </body>
</html>