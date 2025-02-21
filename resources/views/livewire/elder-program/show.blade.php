<div>
    <div class="max-w-7xl bg-gray-200 mb-6 mx-auto py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
        <div class=" overflow-hidden  p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800"></h2>
                <div>
                    <a href="{{ route('elder-program.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 "> 
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Información del Abuelo</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Cédula de identidad</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Nombres</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->first_names }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Apellidos</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->last_names }}</p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Fecha de nacimiento</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->dob }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Edad</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ \Carbon\Carbon::parse($elderProgramApplication->elder->dob)->age }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Correo electrónico</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->email }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Numero de Telefono</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->phone_number }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Dirección</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramApplication->elder->address }}</p>
                </div>
            </div>
        
        </div>
        <div class="container mx-auto p-4 ">
            <div class="overflow-x-auto">
                <h1  class="text-2xl font-semibold text-gray-800 mb-4 text-center">Grupo Familiar</h1>
                <table class="min-w-full bg-white rounded-lg shadow-md border border-blue-700 ">
                    <thead class="bg-blue-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Nombres
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Apellidos
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Parentesco
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Cédula de Identidad
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Edad
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $elderProgramApplication->elder->first_names }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $elderProgramApplication->elder->last_names }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Abuelo</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $elderProgramApplication->elder->document }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($elderProgramApplication->elder->dob)->age }}</div>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <div class="mt-1  mx-10 container-md  text-center  flex items-center justify-center flex-wrap ">
                <h2 class="text-2xl font-semibold text-gray-800  text-center w-full  sm:w-4/1">Diagnostico del Caso</h2>
                <div class=" sm:mr-4 mt-5 w-full sm:w-1/3 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Ingreso Familiar</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
                <div class=" sm:ml-4  mt-5 w-full  sm:w-1/3 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Egreso Familiar</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Médico</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
                <div class=" mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Psico-Social</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Físico-Ambiental</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramApplication->elder->document }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
