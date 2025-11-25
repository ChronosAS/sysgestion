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
        <div class="overflow-x-auto border border-black  w-full mx-auto text-left font-bold">
            <p>DE: COORDINACIÓN DE PROGRAMA - AREA BIENESTAR SOCIAL</p>
            <p>PARA: DIRECCIÓN DE GESTION SOCIAL Y FUNDACIÓN DE GESTION SOCIAL</p>
        </div>
        <div class="pt-5">
            <div class="overflow-x-auto border border-black  w-full mx-auto text-left font-bold">
                <p>SOLICITUD: INGRESO PROGRAMA "Abuelos de Lechería"- Ayuda Solidaria</p>
            </div>
        </div>
    </header>

    <main class="pt-5 items-center justify-center w-full text-center">
        <div class="font-bold">
            <p> <u>IDENTIFICACION DEL CASO</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-full mx-auto text-left font-bold">
            <div class="grid grid-cols-4 grid-rows-3 gap-1 mx-1 px-1">
                <div class="">NOMBRES Y APELLIDOS:
                    <p>{{ $elderProgramMember->elder->first_names.' '.$elderProgramMember->elder->last_names }}</p>
                </div>
                <div class="">C.I N°:
                    <p>{{ $elderProgramMember->elder->document }}</p>
                </div>
                <div class="">LUGAR DE NACIMIENTO:
                    <p>{{ $elderProgramMember->city_of_birth }}</p>
                </div>
                <div class="col-start-1 row-start-2">FECHA DE NACIMIENTO:
                    <p>{{ \Carbon\Carbon::parse($elderProgramMember->elder->dob)->format('d/m/Y') }}</p>
                </div>
                <div class="col-start-2 row-start-2">EDAD:
                    <p>{{ \Carbon\Carbon::parse($elderProgramMember->elder->dob)->age }}</p>
                </div>
                <div  class="col-start-3 row-start-2">ESTADO CIVIL:
                    <p>{{ $elderProgramMember->elder->civil_status->label() }}</p>
                </div>
                <div class="col-start-1 row-start-3">NIVEL DE INSTRUCCION:
                    <p>{{ $elderProgramMember->education_level }}</p>
                </div>
                <div class="col-start-2 row-start-3">OCUPACIÓN:
                    <p>{{ $elderProgramMember->occupation }}</p>
                </div>
                <div class="col-start-3 row-start-3">DIRECCIÓN:
                    <p>{{ $elderProgramMember->elder->address }}</p>
                </div>
                <div class="col-start-4 row-start-1">TELEFONO:
                    <p>{{ $elderProgramMember->elder->phone_number }}</p>
                </div>
            </div>
        </div>
         <div class="font-bold">
            <p> <u>GRUPO FAMILIAR</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-auto mx-auto text-left font-bold">
            @foreach($elderProgramMember->elder->familyMembers as $familyMember)
                <table class="min-w-full bg-white text-center">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">C.I N°</th>
                            <th class="py-2 px-4 border-b">NOMBRES</th>
                            <th class="py-2 px-4 border-b">APELLIDOS</th>
                            <th class="py-2 px-4 border-b">EDAD</th>
                            <th class="py-2 px-4 border-b">PARENTESCO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $familyMember->document }}</td>
                            <td class="py-2 px-4 border-b">{{ $familyMember->first_names }}</td>
                            <td class="py-2 px-4 border-b">{{ $familyMember->last_names }}</td>
                            <td class="py-2 px-4 border-b">{{ $familyMember->age }}</td>
                            <td class="py-2 px-4 border-b">{{ $familyMember->relation }}</td>
                        </tr>
                    </tbody>
                </table>
               
            @endforeach
        </div>


    </main>

    <footer class="w-full text-center">
        <div class="font-bold">
            <p> <u>DIAGNOSTICO DEL CASO</u></p>
        </div>
        <div class="overflow-x-auto border border-black  w-full mx-auto text-left font-bold">
            <div class="grid grid-cols-4 grid-rows-1 gap-1">
                <div class="">ASPECTO SOCIO ECONOMICO:
                    <div>
                        Ingreso Familiar:
                        <p>{{ $elderProgramMember->family_monthly_income }}</p>
                    </div>
                    <div>
                        Egreso Familiar:
                        <p>{{ $elderProgramMember->family_monthly_expenses }}</p>
                    </div>
                </div>
                <div class="col-start-3 row-start-1">ASPECTO PSICO-SOCIAL:
                    <p>{{ $elderProgramMember->psychosocial_aspect }}</p>
                </div>
                <div class="col-start-2 row-start-1">ASPECTO MEDICO:
                    <p>{{ $elderProgramMember->medical_aspect }}</p>
                </div>
                <div class="">ASPECTO FISICO-AMBIENTAL:
                    <p>{{ $elderProgramMember->environmental_aspect }}</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
