<div>
    <div class="flex justify-center items-center py-6" x-data="{ hasImage: @entangle('hasImage')}">
        <div class="max-w-[26.50rem] max-h-[26.50rem] bg-gray-200 mb-6 mx-5 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div class=" overflow-hidden  p-6">
                <div class="flex justify-between items-center space-x-9">
                    <div class="text-center ">
                        @if ($citizen->getFirstMedia('profile'))
                            <img class="mx-auto mb-4  max-w-[13rem] max-h-[13rem] rounded-xl" src="{{ $citizen->getFirstMedia('profile')->getUrl() }}"/>
                        @else
                            <img class="mx-auto mb-4  max-w-[13rem] max-h-[13rem] rounded-xl" src="{{ asset('path/to/default/image.png') }}"/>
                        @endif
                        <div class="flex-col justify-center items-center space-y-2">
                            <form wire:submit='loadImage'>
                                <x-label for="image" value="Agregar Foto" class="text-black mb-2" />
                                <x-input-error class="text-xs" for="image"/>
                                <input
                                    wire:model="image"
                                    type="file"
                                    class=" max-w-[20rem] pr-4 text-sm font-medium bg-stone-50 text-stone-700 border border-gray-300 rounded
                                    file:mr-2.5 file:p-2.5 file:px-3 file:border file:border-gray-300
                                    file:text-xs file:font-medium file:ml-0
                                    file:bg-blue-600 file:text-white
                                    file:rounded
                                    hover:file:cursor-pointer hover:file:bg-blue-700
                                    "
                                />
                                <div class="mt-5">
                                    <button wire:loading.attr='disabled' class="cursor-pointer bg-blue-600 text-white px-4 py-2  rounded hover:bg-blue-700 disabled:bg-blue-400">Cambiar Foto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[10rem] bg-gray-200  mb-6 py-6 sm:px-6 lg:px-8 shadow-lg rounded-xl">
            <div class="">
                <div class="flex flex-col justify-around overflow-hidden  space-y-2">
                    <a href="{{ route('elder-program.index') }}" class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a x-show="hasImage" href="{{ route('elder-program-card', $elderProgramMember->elder->id) }}" target="_blank" class="bg-blue-600 text-white text-center px-4 py-2 rounded hover:bg-blue-700">Carnet</a>
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
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->document }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Nombres</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->first_names }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Apellidos</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->last_names }}</p>
                </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Fecha de nacimiento</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->dob }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Edad</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ \Carbon\Carbon::parse($elderProgramMember->elder->dob)->age }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Correo electrónico</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->email }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Numero de Telefono</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->phone_number }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Dirección</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->elder->address }}</p>
                </div>
                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                    <label class="block text-md font-bold text-gray-800">Número de Cuenta</label>
                    <p class="mt-1 text-gray-900 text-sm">{{ $elderProgramMember->account_number }}</p>
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
                    <tbody class="bg-slate-300 divide-y divide-gray-200">
                        @forelse ($elderProgramMember->elder->familyMembers as $familyMember)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $familyMember->first_names }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $familyMember->last_names }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $familyMember->relation }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $familyMember->document }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $familyMember->age }}</div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="10">
                                No hay familiares registrados.
                            </td>
                        </tr>
                        @endforelse
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
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramMember->family_monthly_income }} Bs.</p>
                </div>
                <div class=" sm:ml-4  mt-5 w-full  sm:w-1/3 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Egreso Familiar</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramMember->family_monthly_expenses }} Bs.</p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1 border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Médico</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramMember->medical_aspect }}</p>
                </div>
                <div class=" mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Psico-Social</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramMember->psychosocial_aspect }}</p>
                </div>
                <div class="  mt-5 w-full  sm:w-4/1  border border-blue-700">
                    <label class="bg-blue-600 block text-md font-bold text-white">Aspecto Físico-Ambiental</label>
                    <p class="bg-white  text-gray-900 text-sm">{{ $elderProgramMember->environmental_aspect }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
