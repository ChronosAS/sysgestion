<div>
    <x-logos.watermark/>
    <div class="py-12">
        <div class="max-w-[100rem] mx-auto px-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-xl sm:rounded-lg">
                <header class="text-center text-xl mt-5 font-black text-white font-sans pb-5 ">Permisos</header>
                <div class="p-6 lg:p-8 bg-gray-200 border-t-2  border-blue-700">
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <div class="flex flex-column  space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div class="flex justify-between items-center gap-2">
                                <div class="  ">
                                    {{-- <x-select

                                       name="hasCard"
                                       wire="live"
                                       placeholder="Con Carnet"
                                       :values="[0 => 'No', 1 => 'Si']"
                                   /> --}}
                               </div>
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 h-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                                </div>
                                <div class="mx-4">
                                    
                                        <x-button-href href="{{ route('permits.create') }}" class="bg-green-600 h-10 hover:bg-green-500">
                                            Registrar Permiso
                                        </x-button-href>
                                 
                                </div>
                                <div class=" p-2 ps-0">
                                    <x-input id="date" type="date" style="color: black" class="   text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model.live="date" />
                                </div>
                            </div>
                        </div>
                        <table class="w-full border border-blue-700  text-center rtl:text-right text-white">
                            <thead class="text-sm font-semibold  text-white uppercase bg-blue-800">
                                <tr>
                                    <th scope="col" class="px-10 py-3 ">
                                        <div class="flex   items-center">
                                            ID
                                            <a href="#" wire:click.prevent="sortBy('elder_document')" ><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3 ">
                                        <div class="flex text-wrap  items-center ">
                                             Nombre del Responsable

                                            <a href="#" wire:click.prevent="sortBy('elder_first_names')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex    items-center ">
                                            RIF                          
                                            <a href="#" wire:click.prevent="sortBy('elder_dob')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex   items-center ">
                                            Teléfono
                                            <a href="#" wire:click.prevent="sortBy('elder_email')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex   items-center ">
                                             Fecha del Evento
                                            <a href="#" wire:click.prevent="sortBy('elder_phone_number')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex  text-wrap items-center ">
                                           
                                                 Horario del Evento                
                                            <a href="#" wire:click.prevent="sortBy('account_number')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex   items-center ">
                                            Fecha del Registro
                                            <a href="#" wire:click.prevent="sortBy('created_at')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>
                                
                                    <th scope="col" class="px-10 py-3">
                                        <div class="flex   items-center ">

                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                               
                                    {{-- <tr class="bg-white border-b">
                                        <th scope="row" class=" py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            <a href="#" wire:navigate class="text-blue-600 hover:underline hover:text-blue-800"> 
                                            </a>
                                        </th>
                                        <td class=" text-gray-900 py-4 break-words  ">
                                           
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            
                                        </td>
                                        <td class=" text-gray-900 py-4 break-words min-w-0 max-w-[5rem]">
                                           
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                           
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                           
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            <a href="#" wire:navigate class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500 cursor-pointer  hover:text-yellow-600">
                                                    <path  d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                </svg>
                                            </a> 
                                        </td>
                                    </tr> --}}
                        
                                    <tr>
                                        <td class="px-6 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="10">
                                            No hay Permisos registrados.
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                        <div class="m-4 text-black ">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>