<div x-data="{ openFileModal: @entangle('openFileModal') }">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">{{ $application->code }}</h2>
                <div>
                    <a href="{{ route('applications.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a href="{{ route('applications.edit', $application) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-3">
            <div class="col-span-3">
            <!-- Content for the 3/4 column -->
                <div class="container mx-auto p-4">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Información de solicitud</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                                <label class="block text-md font-bold text-gray-800">Solicitante</label>
                                <p class="mt-1 text-gray-900 text-sm">{{ $application->applicant->first_names.' '.$application->applicant->last_names }}</p>
                            </div>
                                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                                <label class="block text-md font-bold text-gray-800">Beneficiario</label>
                                <p class="mt-1 text-gray-900 text-sm">{{ $application->recipientable->first_names.' '.$application->recipientable->last_names}}</p>
                            </div>
                            <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                                <label class="block text-md font-bold text-gray-800">Estado</label>
                                <p class="mt-1 text-gray-900 text-sm">{{ $application->status->label()}}</p>
                            </div>
                            <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                                <label class="block text-md font-bold text-gray-800">Fecha de solicitud</label>
                                <p class="mt-1 text-gray-900 text-sm"> {{ \Carbon\Carbon::parse($application->application_date)->format('d-m-Y') }}</p>
                            </div>
                            @if($application->delivery_date)
                                <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                                    <label class="block text-md font-bold text-gray-800">Genero</label>
                                    <p class="mt-1 text-gray-900 text-sm">{{ \Carbon\Carbon::parse($application->delivery_date)->format('d-m-Y') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
            <!-- Content for the 1/4 column -->
                <div class="container mx-auto p-4">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Documentos</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 border shadow-md">
                            <thead class="bg-blue-800 text-white">
                                <tr>
                                    <th>Nombre</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <button type="button" class="inline-block bg-blue-900 hover:bg-blue-500 rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none" @click="openFileModal = true">Agregar</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($application->getMedia('files') as $file)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-500 hover:text-blue-700">
                                        <a href="{{ asset('files/'.$file->id.'/'. $file->file_name) }}" target='__blank'>{{ $file->name }}</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">
                                        <button type="button" class="text-red-600 hover:text-red-900" wire:click="deleteFile({{ $file->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="relative overflow-x-auto shadow-md">
                    <table class="w-full border-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class='text-xs text-white-700 uppercase bg-blue-800'>
                            <tr class="bg-blue-800 text-white">
                                <th class="pb-3 col-4 px-4 sm:px-6 py-3 text-left" scope="col">
                                    Medicamento(Composición/Presentación)
                                </th>
                                <th class="pb-3 px-4 sm:px-6 py-3 text-left" scope="col">
                                    Requeridos
                                </th>
                                <th class="pb-3 px-4 sm:px-6 py-3 text-left" scope="col">
                                    Disponibles
                                </th>
                                <th class="pb-3 px-4 sm:px-6 py-3 text-left" scope="col">
                                    Precio/unidad (Bs)
                                </th>
                                <th class="pb-3 px-4 sm:px-6 py-3 text-left" scope="col">
                                    Total Faltantes (Bs)
                                </th>
                                <th class="col-2 px-4 sm:px-6 py-3 text-left" scope="col">
                                    <button type="button" class="inline-block bg-blue-900 hover:bg-blue-500 rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none" wire:click="addMedicine">Agregar</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($medicines as $medicine)
                                <tr class="bg-white border-b dark:border-gray-700">
                                    <td class="px-4 sm:px-6 py-4 text-sm text-black">
                                        {{ $medicine->name.'('.$medicine->composition->label().'/'.$medicine->presentation->label().')' }}
                                    </td>
                                    <td class="px-4 sm:px-6 py-4 text-sm text-black">
                                        {{ $medicine->pivot->quantity }}
                                    </td>
                                    <td class="px-4 sm:px-6 py-4 text-sm text-black">
                                        {{ $medicine->stock }}
                                    </td>
                                    <td class="px-4 sm:px-6 py-4 text-sm text-black">
                                        {{ $medicine->price }}
                                    </td>
                                    <td class="px-4 sm:px-6 py-4 text-sm text-black">
                                        {{ $medicine->subTotal }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 text-center text-xl col-span-5 text-black" colspan="9">
                                        No hay Medicamentos registrados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                             <tr class="font-semibold bg-blue-900 text-white">
                                <td colspan=3></td>
                                <th scope="row" class="px-6 py-3 text-base">Total =</th>
                                <td class="px-6 py-3" colspan="2">{{ $medicinesTotal }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div>
        <div x-show="openFileModal" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="bg-black opacity-50 absolute inset-0"></div>
            <div class="bg-white rounded-lg shadow-lg p-6 relative z-10 w-1/3">
                <h2 class="text-xl font-semibold mb-4">Subir Archivo</h2>
                <form wire:submit.prevent="uploadFile">
                    <div class="mb-4">
                        <label for="file" class="block text-sm font-medium text-gray-700">Archivo</label>
                        <x-input type="file" id="file" wire:model="file" class="mt-1 block border w-full"/>
                        @error('file') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="button" @click="openFileModal = false" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 mr-2">Cancelar</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Subir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
