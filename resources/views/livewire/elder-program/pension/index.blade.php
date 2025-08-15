<div>
    <x-logos.watermark/>
    <div class="py-12">
        <div class="max-w-[100rem] mx-auto px-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-xl sm:rounded-lg">
                <header class="text-center text-xl mt-5 font-black text-white font-sans pb-5 ">Pago de Pensiones en el Programa Abuelos de Lecheria</header>
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
                                    @can('elder-pension:create')
                                        <x-button-href @click="$dispatch('showGenerateModal')" class="bg-green-600 hover:bg-green-500">
                                            Generar Reporte
                                        </x-button-href>
                                    @endcan
                                </div>
                                <div class=" p-2 ps-0">
                                    <x-input id="date" type="date" style="color: black" class="   text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model.live="date" />
                                </div>
                            </div>
                        </div>
                        <table class="w-full border border-blue-700  text-center  text-white">
                            <thead class="text-sm font-semibold text-white uppercase bg-blue-800">
                                <tr>
                                    <th scope="col" class="px-10 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Código
                                            <a href="#" wire:click.prevent="sortBy('code')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Número Total de Abuelos
                                            <a href="#" wire:click.prevent="sortBy('total_elders')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Monto Individual
                                            <a href="#" wire:click.prevent="sortBy('amount')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Monto Total
                                            <a href="#" wire:click.prevent="sortBy('total')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-10 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Fecha del Reporte
                                            <a href="#" wire:click.prevent="sortBy('created_at')">
                                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reports as $index => $report)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 text-gray-900 text-center">
                                            <a href="{{ route('elder-program.pension.show', $report->code) }}" class="text-blue-600 hover:underline hover:text-blue-800">
                                                {{ $report->code }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 text-center">
                                            {{ $report->total_elders }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 text-center">
                                            {{ $report->amount }}Bs.
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 text-center">
                                            {{ $report->total }}Bs.
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 text-center">
                                            {{ $report->created_at->format('d/m/Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="px-6 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="10">
                                            No hay Pensiones registradas.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="m-4 text-black ">
                            {{ $reports->links('vendor.livewire.tailwind-pagination',data: ['scrollTo'=>false]) }}
                        </div>
                    </div>
                    <livewire:elder-program.pension.generate-modal />
                </div>
            </div>
        </div>
    </div>
</div>
