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
        <div class=" py-5 flex items-center justify-evenly space-x-32">
            <div>
                <img src="{{ asset('assets/img/escudo-lecheria.webp') }}"  class="w-20 h-20 mx-auto"/>
                <p>Fecha:</p>
                <p class="text-[13px] font-black text-black">{{ now()->format('d/m/Y') }}</p>
            </div>
            <div >
                <img src="{{ asset('assets/img/logo-lecheria-letras.png') }}"  class="w-24 h-24 mx-auto"/>
            </div>
        </div>
        <div class="overflow-x-auto font-bold pb-5">
            <h1><strong><u>INFORME SOCIAL</u></strong></h1>
            <h1><strong><u>INGRESO PROGRAMA ABUELOS DE LECHERIA</u></strong></h1>
        </div>
        <div class="overflow-x-auto border border-black  w-1/2 mx-auto text-left font-bold">
            <p>DE: COORDINACIÓN DE PROGRAMA - AREA BIENESTAR SOCIAL</p> 
            <p>PARA: DIRECCIÓN DE GESTION SOCIAL Y FUNDACIÓN DE GESTION SOCIAL</p>
        </div>
        <div class="pt-5">
            <div class="overflow-x-auto border border-black  w-1/2 mx-auto text-left font-bold">
                <p>SOLICITUD: INGRESO PROGRAMA "Abuelos de Lechería"- Ayuda Solidaria</p> 
            </div>
        </div>
    </header>

    <main class="pt-5 items-center justify-center w-full text-center">
        <div class="font-bold">
            <p> <u>IDENTIFICACION DEL CASO</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-1/2 mx-auto text-left font-bold">
            <div class="grid grid-cols-8 grid-rows-5 gap-4">
                <div class="col-span-2">
                    <p>NOMBRES Y APELLIDOS:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-5">
                    <p >C.I N°:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 row-start-2">
                    <p >LUGAR DE NACIMIENTO:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-5 row-start-2">
                    <p >FECHA DE NACIMIENTO:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-5 row-start-4">
                    <p >EDAD:</p>
                    <p>{{}}</p>
                </div>
                <div  class="col-span-2 col-start-1 row-start-3">
                    <p >ESTADO CIVIL:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-5 row-start-3">
                    <p >NIVEL DE INSTRUCCION:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-5 row-start-5">
                    <p >OCUPACIÓN:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-1 row-start-4">
                    <p >DIRECCIÓN:</p>
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-1 row-start-5">
                    <p >TELEFONO:</p>
                    <p>{{}}</p>
                </div>
            </div>
        </div>
         <div class="font-bold">
            <p> <u>GRUPO FAMILIAR</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-1/2 mx-auto text-left font-bold">
            <div class="grid grid-cols-2 grid-rows-5 gap-4">
                <div class="">
                    <p>NOMBRES Y APELLIDOS:</p>
                    <p>{{}}</p>
                </div>
                <div class="row-start-2">
                    <p >C.I N°:</p>
                    <p>{{}}</p>
                </div>
                <div class="row-start-3">
                    <p >EDAD:</p>
                    <p>{{}}</p>
                </div>
                <div class="row-start-4">
                    <p >PARENTESCO:</p>
                    <p>{{}}</p>
                </div>
                <div class="row-start-5">
                    <p >PARENTESCO:</p>
                    <p>{{}}</p>
                </div>
            </div>
        </div>


    </main>

    <footer class="w-full text-center">
        <div class="font-bold">
            <p> <u>DIAGNOSTICO DEL CASO</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-1/2 mx-auto text-left font-bold">
            <div class="grid grid-cols-4 grid-rows-4 gap-4">
                <div class="col-span-2">ASPECTO SOCIO ECONOMICO:
                    <div class="flex flex-row space-x-32">
                        <div>
                            Ingreso Familiar:
                            <p>{{}}</p>
                        </div>
                        <div>
                            Egreso Familiar:
                            <p>{{}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 col-start-1 row-start-3">ASPECTO PSICO-SOCIAL:
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 col-start-1 row-start-2">ASPECTO MEDICO:
                    <p>{{}}</p>
                </div>
                <div class="col-span-2 row-start-4">ASPECTO FISICO-AMBIENTAL:
                    <p>{{}}</p>
                </div>
            </div>
        </div>    
    </footer>
</body>
</html>