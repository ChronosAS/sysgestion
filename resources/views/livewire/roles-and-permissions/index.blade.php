<div class="max-w-md">
    <div class="bg-white overflow-hidden mt-3 shadow-xl sm:rounded-lg">
        <header class="text-center text-xl font-black font-sans pb-5 mt-5">Roles</header>
        <div class="p-6 lg:p-8 bg-white border-t border-gray-200">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input wire:model.live='roleSearch' type="text" name="roleSearch" id="roleSearch" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                    </div>
                </div>
                <table class="w-full border border-gray-200 text-sm text-center rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Rol
                                    <a href="#" wire:click.prevent="roleSortBy('name')" ><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-4 py-3">
                                @can('role:create')
                                    <x-button-href wire:click="$dispatch('createRole')" wire:loading.attr="disabled">
                                        Crear
                                    </x-button-href>
                                @endcan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            @if ($loop->last)
                                <tr class="bg-white hover:bg-gray-50">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $role->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a class="font-medium text-blue-600 cursor-pointer hover:underline">Editar</a>
                                    </td>
                                </tr>
                            @else
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $role->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a class="font-medium text-blue-600 cursor-pointer hover:underline">Editar</a>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td class="px-6 py-4 text-center text-xl col-span-5" colspan="6">
                                    No hay usuarios registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="m-4 text-white ">
                    {{ $roles->links('vendor.livewire.tailwind-pagination',data: ['scrollTo'=>false]) }}
                </div>
            </div>
        </div>
    </div>
    <livewire:roles-and-permissions.modals.create>
</div>
