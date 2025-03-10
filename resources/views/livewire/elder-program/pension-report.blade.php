<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Pensiones</title>
     <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" items-center justify-center">
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
            <table class="min-w-full bg-white text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Cedula</th>
                        <th class="py-2 px-4 border-b">Nombres y Apellidos</th>
                        <th class="py-2 px-4 border-b">Número de Cuenta</th>
                        <th class="py-2 px-4 border-b">Fecha de Pago</th>
                        <th class="py-2 px-4 border-b">Monto en Bs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">28607128</td>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">01234567899874563210</td>
                        <td class="py-2 px-4 border-b">{{ now()->format('d/m/Y') }}</td>
                        <td class="py-2 px-4 border-b">7891.20</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">14363454</td>
                        <td class="py-2 px-4 border-b">Jane Smith</td>
                        <td class="py-2 px-4 border-b">01234567899874563210</td>
                        <td class="py-2 px-4 border-b">{{ now()->format('d/m/Y') }}</td>
                        <td class="py-2 px-4 border-b">7891.20</td>
                    </tr>
                    <!-- Add more rows as needed -->
                    
                </tbody>
            </table>
        </div>
    </main>
    
    <footer class="w-full text-center">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-center">
                    <thead class="font-bold">
                        <tr class="">
                            <td> Número de Abuelos Pensionados:</td>
                            <td> Monto Total en Bolivares:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td>2</td>
                            <td>1.578.24</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </footer>
</body>
</html>