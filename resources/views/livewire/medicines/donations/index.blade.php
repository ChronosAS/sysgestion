<div>
    <x-logos.watermark/>
    <div class="py-12">
        <div class="max-w-[100rem] mx-auto px-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-xl sm:rounded-lg">
                <header class="text-center text-xl mt-5 font-black text-white font-sans pb-5 ">Donaciones de Medicamentos</header>
                <div class="p-6 lg:p-8 bg-gray-200 border-t-2  border-blue-700">
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <div class="flex flex-column  space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div class="flex justify-between items-center">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                                </div>
                                <div class="mx-4">
                                    <x-button-href href="{{ route('medicines.donations.create') }}"  class="bg-green-600 hover:bg-green-500">
                                        Registrar Donación
                                    </x-button-href>
                                </div>
                                <div class="mx-4">
                                    <x-input id="date" type="date" style="color: black" class=" flex 2xl:col-start-6 xl:col-start-5 md:col-start-5 w-full sm:w-[10rem]  xl:w-[10rem]  lg:w-[10rem] md:w-[10rem] 2xl:w-[10rem]  text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model.live="date" />
                                </div>
                            </div>
                        </div>
                        <table class="w-full border border-blue-700  text-center  text-white">
                            <thead class="md:text-xs 2xl:text-sm xl:text-[11px] text-sm  text-center font-semibold  text-white uppercase bg-blue-800">
                                <tr class="">
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex   items-center ">
                                            Código
                                            <a href="#" wire:click.prevent="sortBy('code')" >
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex   items-center">
                                            Cédula
                                            <a href="#" wire:click.prevent="sortBy('donor_document')" >
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex text-wrap  items-center ">
                                            Nombres y Apellidos
                                            <a href="#" wire:click.prevent="sortBy('donor_name')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex    items-center ">
                                            Edad
                                            <a href="#" wire:click.prevent="sortBy('donor_dob')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex    items-center ">
                                            Teléfono
                                            <a href="#" wire:click.prevent="sortBy('donor_phone_number')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex    items-center ">
                                            Correo Electrónico
                                            <a href="#" wire:click.prevent="sortBy('donor_email')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex    items-center ">
                                            Dirección
                                            <a href="#" wire:click.prevent="sortBy('donor_address')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    {{-- <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">">
                                        <div class="flex    items-center ">
                                            Municipio
                                            <a href="#" wire:click.prevent="sortBy('created_at')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th> --}}
                                    <th scope="col" class="2xl:px-10 xl:px-9 2xl:py-4 xl:py-3 py-2">
                                        <div class="flex    items-center ">
                                            Fecha de Registro
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                    <path fill-rule="evenodd" d="M13.78 10.47a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l.97.97V5.75a.75.75 0 0 1 1.5 0v5.69l.97-.97a.75.75 0 0 1 1.06 0ZM2.22 5.53a.75.75 0 0 1 0-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1-1.06 1.06l-.97-.97v5.69a.75.75 0 0 1-1.5 0V4.56l-.97.97a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" items-center md:text-xs 2xl:text-sm xl:text-xs text-sm font-black">
                                @forelse( $donations as $index => $donation)
                                    <tr class="bg-white border-b break-words">
                                        <th scope="row" class=" px-5 py-4 text-gray-900 ">
                                            <a href="{{ route('medicines.donations.show', $donation->id)}}"  class="text-blue-600 hover:underline hover:text-blue-800">
                                                {{ $donation->code }}
                                            </a>
                                        </th>
                                        <td class=" px-5 py-4 text-gray-900  break-words min-w-0 max-w-[5rem]" >
                                            {{ $donation->donor_document }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900  break-words min-w-0 max-w-[5rem]">
                                            {{ $donation->donor_name }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900 break-words min-w-0 max-w-[5rem]">
                                            {{ \Carbon\Carbon::parse($donation->donor_dob)->age }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900 break-words min-w-0 max-w-[5rem]">
                                            {{ $donation->donor_phone_number }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900 break-words min-w-0 max-w-[5rem]">
                                            {{ $donation->donor_email }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900 break-words min-w-0 max-w-[5rem]">
                                            {{ $donation->donor_address }}
                                        </td>
                                        <td class=" px-5 py-4 text-gray-900">
                                            {{ $donation->created_at->format('d/m/Y') }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="px-2 py-4 text-center text-xl col-span-8  text-black bg-white" colspan="9">
                                            No hay Donaciones registradas.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="m-4 text-black ">
                            {{ $donations->links('vendor.livewire.tailwind-pagination',data: ['scrollTo'=>false]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
