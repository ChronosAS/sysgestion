<div>
    <div class="flex flex-wrap justify-center items-center py-6" >
        <div class="w-full sm:w-auto max-w-[26.50rem] max-h-[26.50rem] bg-gray-200 mb-6 mx-5 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div class="overflow-hidden p-6">
                <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0 sm:space-x-9">
                    <div class="text-center">
                        {{-- <a href="{{ route('elder-program.application.report', $elderProgramMember->id) }}" target="_blank" class="bg-green-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Imprimir</a> --}}
                        {{-- <div class="flex flex-col justify-center items-center space-y-2">
                            <form wire:submit='loadImage'>
                                <x-label for="image" value="Agregar Foto" class="text-black mb-2" />
                                <x-input-error class="text-xs" for="image" />
                                <input
                                    wire:model="image"
                                    type="file"
                                    class="w-full sm:max-w-[20rem] pr-4 text-sm font-medium bg-stone-50 text-stone-700 border border-gray-300 rounded
                                    file:mr-2.5 file:p-2.5 file:px-3 file:border file:border-gray-300
                                    file:text-xs file:font-medium file:ml-0
                                    file:bg-blue-600 file:text-white
                                    file:rounded
                                    hover:file:cursor-pointer hover:file:bg-blue-700"
                                />
                                <div class="mt-5">
                                    <button wire:loading.attr='disabled' class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 disabled:bg-blue-400">Cambiar Foto</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-auto  max-w-[10rem] bg-gray-200 mb-6 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div>
                <div class="flex flex-col justify-around overflow-hidden space-y-2">
                    <a href="{{ route('permits.index') }}" class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a class="bg-green-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Descripcion del evento y Publicidad</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Nombre</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Apellido</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Horario</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Fecha de Elaboración del Permiso</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800"> Número del permiso</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Fecha de la actividad</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Cedula de Identidad</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">RIF</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Dirección de Habitación</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Télefono</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Sector</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Área Permisada</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 text-center ">
            <h2 class="text-2xl font-semibold text-gray-800  text-center w-full sm:w-4/1">Observaciones:</h2>
            <div class="mt-5   container-md  text-center  flex items-center justify-evenly flex-wrap gap-1 ">
                <div class="  mt-5 w-full sm:w-3/2 border border-blue-700 text-wrap">
                    <label class="bg-blue-600 block text-md font-bold text-white">Observaciones del Evento</label>
                    <p class="bg-white  text-gray-900 text-sm "></p>
                </div>
                <div class="   mt-5 w-full  sm:w-3/2 border border-blue-700 text-wrap">
                    <label class="bg-blue-600 block text-md font-bold text-white">Observaciones de la Publicidad y/o propaganda</label>
                    <p class="bg-white  text-gray-900 text-sm "></p>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Descripcion del evento</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">DEPORITVO:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">CULTURAL:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">BENÉFICO:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">EDUCATIVO:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">RELIGIOSO:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800"> OTROS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
        <div class="container mx-auto p-4 ">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Descripción de la Publicidad y/o Propagandada</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">VOLANTES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">AFICHES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">PENDONES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">HABLADORES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">PANCARTAS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">CALCOMANIAS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">BANDEROLAS O BANDERINES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">STANDS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">TOLDOS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">INFLABLES:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">OTROS:</label>
                    <p class="mt-1 text-gray-900 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
</div>
