<div>
    <x-logos.watermark/>
    <div class="py-12">
        <div class="max-w-[100rem] mx-auto px-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-xl sm:rounded-lg">
                <header class="text-center text-xl mt-5 font-black text-white font-sans pb-5 ">Soporte Técnico de Tecnología y Sistemas</header>
                <div class="p-6 lg:p-8 bg-gray-200 border-t-2  border-blue-700">
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <div class="flex flex-column  space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div class="flex justify-between items-center gap-2">
                               
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 h-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                                </div>
                                <div class="mx-4">
                                
                                        <x-button-href href="{{ route('technology-and-systems.create') }}" class="bg-green-600 h-10 hover:bg-green-500">
                                            Registrar
                                        </x-button-href>
                                   
                                </div>
                            </div>
                        </div>
                        <table class="w-full border border-blue-700  text-center rtl:text-right text-white">
                            <thead class="md:text-xs 2xl:text-sm xl:text-[11px] text-sm  text-center font-semibold  text-white uppercase bg-blue-800">
                                <tr>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3 ">
                                        <div class="flex   items-center">
                                            Cédula
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3 ">
                                        <div class="flex text-wrap  items-center ">
                                            Nombre Completo
                                            <a href="#" wire:click.prevent="sortBy('elder_first_names')">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex    items-center ">
                                            Edad
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex   items-center ">
                                            Correo Electrónico
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex   items-center ">
                                            Teléfono
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex  text-wrap items-center ">
                                            Numero de Cuenta
                                           <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex   items-center ">
                                            Fecha de ingreso
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex   items-center ">
                                            Carnet
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>

                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-9 xl:px-7 py-3">
                                        <div class="flex   items-center ">

                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="md:text-xs 2xl:text-sm xl:text-xs text-sm font-black">
                                
                                    <tr class="bg-white border-b">
                                        <th scope="row" class=" py-4 font-medium text-gray-900 whitespace-nowrap ">
                                          
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
                                        <td class="py-4">
                                          
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                         
                                        </td>
                                    </tr>
       
                                    <tr>
                                        <td class="2xl:px-9 xl:px-7 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="10">
                                            No hay Abuelos registrados.
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
