<div>
    <div class="flex flex-wrap justify-center items-center py-6" x-data="{ hasImage: @entangle('hasImage')}">
        <div class="w-full sm:w-auto  max-w-[10rem] bg-gray-200 mb-6 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div>
                <div class="flex flex-col justify-around overflow-hidden space-y-2">
                    <a href="{{ route('technology-and-systems.index') }}" class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a  href=""  class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Hoja de servicio</a>
                    <a href=""  class="bg-green-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Nota de Entrada de Equipo</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Información del Soporte Realizado</h2>
            <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap mb-4">
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Nombre del Tecnico</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/5 px-3">
                    <label class="block text-md font-bold text-gray-800">Fecha</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Departamento</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/3 px-3">
                    <label class="block text-md font-bold text-gray-800">Dirección</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                    <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Nombre del Usuario</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
               
                <div class="bg-blue-200 border-l-4 mt-5  w-full  px-3">
                    <label class="block text-md font-bold text-gray-800">Descripcion del Servicio Efectuado</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full  px-3">
                    <label class="block text-md font-bold text-gray-800">Sugerencias Tecnicas</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                {{-- <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Fallas</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Observaciones:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Cantidad</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    <label class="block text-md font-bold text-gray-800">Descripción de equipo</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div> --}}
            </div>

        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Caracteristicas del Equipo</h2>
            <div class="bg-blue-200 border-l-4 mt-5  w-full px-3">
                <label class="block text-md font-bold text-gray-800">Serial</label>
                <p class="mt-1 text-gray-900 text-sm"></p>
            </div>
            <div class="bg-blue-200 border-l-4 mt-5  w-full px-3">
                <label class="block text-md font-bold text-gray-800">Modelo</label>
                <p class="mt-1 text-gray-900 text-sm"></p>
            </div>
            <div class="bg-blue-200 border-l-4 mt-5  w-full px-3">
                <label class="block text-md font-bold text-gray-800">Tipo de Equipo</label>
                <p class="mt-1 text-gray-900 text-sm"></p>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Tipo de Servicio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-blue-200 border-l-4 mt-5  w-full sm:w-1/4 px-3">
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
