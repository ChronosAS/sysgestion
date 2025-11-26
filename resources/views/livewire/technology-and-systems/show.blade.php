<div>
    <div class="flex flex-wrap justify-center items-center py-6" x-data="{ hasImage: @entangle('hasImage')}">
        <div class="w-full sm:w-auto  max-w-[10rem] bg-gray-200 mb-6 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div>
                <div class="flex flex-col justify-around overflow-hidden space-y-2">
                    <a href="{{ route('technology-and-systems.index') }}" class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a  href=""  class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Hoja de servicio</a>
                    <a href=""  class="bg-green-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Nota de Entrega</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Información del Soporte Realizado</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Cédula de identidad</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Nombres</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Apellidos</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Fecha de nacimiento</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Lugar de Nacimiento</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Edad</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Correo electrónico</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Numero de Telefono</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Nivel de Instrucción</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Ocupación</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Edo. Civil</label>
                    <p class="mt-1 text-gray-900 text-sm"> </p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Dirección</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Número de Cuenta</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <div class="mt-1  mx-10 container-md  text-center  flex items-center justify-center flex-wrap ">
                <h2 class="text-2xl font-semibold text-gray-800  text-center w-full  sm:w-4/1">Diagnostico del Caso</h2>
                <div class=" sm:mr-4 mt-5 w-full sm:w-1/3 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Ingreso Familiar</label>
                    <p class="bg-white  text-gray-900 text-sm"> Bs.</p>
                </div>
                <div class=" sm:ml-4  mt-5 w-full  sm:w-1/3 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Egreso Familiar</label>
                    <p class="bg-white  text-gray-900 text-sm">.</p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Médico</label>
                    <p class="bg-white  text-gray-900 text-sm"></p>
                </div>
                <div class=" mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Psico-Social</label>
                    <p class="bg-white  text-gray-900 text-sm"></p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Físico-Ambiental</label>
                    <p class="bg-white  text-gray-900 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
</div>
