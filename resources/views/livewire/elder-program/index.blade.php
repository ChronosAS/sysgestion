<div>
    <x-logos.watermark/>
    <div class="py-12">
        <div class="max-w-[100rem] mx-auto px-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-xl sm:rounded-lg">
                <header class="text-center text-xl mt-5 font-black text-white font-sans pb-5 ">Miembros del Programa Abuelos de Lecheria</header>
                <div class="p-6 lg:p-8 bg-gray-200 border-t-2  border-blue-700">
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <div class="flex flex-column  space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div class="flex justify-between items-center gap-2">
                                <div class="  ">
                                    <x-select

                                       name="hasCard"
                                       wire="live"
                                       placeholder="Con Carnet"
                                       :values="[0 => 'No', 1 => 'Si']"
                                   />
                               </div>
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 h-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                                </div>
                                <div class="mx-4">
                                    @can('elder:create')
                                        <x-button-href href="{{ route('elder-program.create') }}" class="bg-green-600 h-10 hover:bg-green-500">
                                            Registrar
                                        </x-button-href>
                                    @endcan
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
                                @forelse( $elders as $elder)
                                    <tr class="bg-white border-b">
                                        <th scope="row" class=" py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            <a href="{{ route('elder-program.show',$elder->id) }}" wire:navigate class="text-blue-600 hover:underline hover:text-blue-800"> {{ $elder->elder->document }}
                                            </a>
                                        </th>
                                        <td class=" text-gray-900 py-4 break-words  ">
                                            {{ $elder->elder->first_names.' '.$elder->elder->last_names }}
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            {{ \Carbon\Carbon::parse($elder->elder->dob)->age }}
                                        </td>
                                        <td class=" text-gray-900 py-4 break-words min-w-0 max-w-[5rem]">
                                            {{ $elder->elder->email }}
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            {{ $elder->elder->phone_number }}
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            {{ $elder->account_number }}
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            {{ \Carbon\Carbon::parse($elder->created_at)->format('d/m/Y') }}
                                        </td>
                                        <td class="py-4">
                                            @if($elder->has_card)
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-green-500 mx-14">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 12.75 6 6 9-13.5" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-red-500 mx-14">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            @endif
                                        </td>
                                        <td class=" text-gray-900 py-4">
                                            @can('elder:edit')
                                                <a href="{{ route('elder-program.edit', $elder->id ) }}" wire:navigate class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500 cursor-pointer  hover:text-yellow-600">
                                                        <path  d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                    </svg>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="2xl:px-9 xl:px-7 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="10">
                                            No hay Abuelos registrados.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="m-4 text-black ">
                            {{ $elders->links('vendor.livewire.tailwind-pagination',data: ['scrollTo'=>false]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
