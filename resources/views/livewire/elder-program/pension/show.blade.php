<div>
    <div class="py-12">
        <div class="max-w-7xl bg-gray-200 mx-auto my-6 py-6 sm:px-6 lg:px-8 shadow-lg  rounded-xl">
            <div class="container mx-auto p-4 ">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Información del Reporte</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Codigo:</label>
                        <p class="mt-1 text-gray-900 text-sm">  {{ $pensionReport->code }}</p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Fecha del Reporte:</label>
                        <p class="mt-1 text-gray-900 text-sm">  {{ $pensionReport->created_at->format('d/m/Y') }}</p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Monto Total:</label>
                        <p class="mt-1 text-gray-900 text-sm">  {{ $pensionReport->total }}</p>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <h1  class="text-2xl font-semibold text-gray-800 mb-4 text-center">Abuelos En el Reporte</h1>
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
                            <x-button-href href="{{ route('elder-program.pension.report',$pensionReport->id) }}" target="_blank"  class="bg-green-600 hover:bg-green-500">
                                Imprimir Reporte
                            </x-button-href>
                        </div>
                        <div class="mx-4">
                            <x-button-href href="#" wire:click='saveTxt'  class="bg-blue-600 hover:bg-blue-500">
                                Guardar TXT
                            </x-button-href>
                        </div>
                        <div class="mx-4" x-data="{ paidAt: @json($pensionReport->paid_at) }">
                            <div x-show="paidAt == null">
                                <x-button-href href="#" wire:click='markAsPaid' class="bg-blue-600 hover:bg-blue-500">
                                    Telegram
                                </x-button-href>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="w-full border border-blue-700 text-center    text-white">
                    <thead class="text-sm font-semibold  text-white uppercase bg-blue-800 ">
                        <tr class="">
                            <th scope="col" class="px-10 py-3 ">
                                <div class="  ">
                                    Cedula
                                    <a href="#" wire:click.prevent="sortBy('code')" ><svg class="w-3 h-3 ms-1.5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-10 py-3 ">
                                <div class=" text-wrap  ">
                                    Nombres y Apellidos
                                    <a href="#" wire:click.prevent="sortBy('total_elders')">
                                        <svg class="w-3 h-3 ms-1.5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-10 py-3 ">
                                <div class="   ">
                                    Número de Cuenta
                                    <a href="#" wire:click.prevent="sortBy('amount')"><svg class="w-3 h-3 ms-1.5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-10 py-3 ">
                                <div class="   ">
                                    Monto en Bs
                                    <a href="#" wire:click.prevent="sortBy('created_at')"><svg class="w-3 h-3 ms-1.5 hidden " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class=" items-center">
                    @forelse( $elders as $elder)
                        <tr class="bg-white border-b  ">
                            <th scope="row" class=" px-6 py-4 text-gray-900 ">
                                {{ $elder->elder->document }}
                            </th>
                            <td class=" px-6 py-4 text-gray-900">
                                {{ $elder->elder->first_names.' '.$elder->elder->last_names }}
                            </td>
                            <td class=" px-6 py-4 text-gray-900">
                                {{ $elder->account_number }}
                            </td>

                            <td class=" px-6 py-4 text-gray-900">
                                {{ $pensionReport->amount }}
                            </td>
                        </tr>
                        @empty
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
