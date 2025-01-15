<div class="max-w-md">
    <div class="bg-blue-800 overflow-hidden mt-3 shadow-xl sm:rounded-lg">
        <header class="text-center text-xl text-white font-black font-sans pb-5 mt-5">Roles</header>
        <div class="p-6 lg:p-8 bg-slate-200 border-t-2 border-blue-700">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input wire:model.live='roleSearch' type="text" name="roleSearch" id="roleSearch" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                    </div>
                </div>
                <table class="w-full border border-blue-700 shadow-md text-sm text-center rtl:text-right text-white">
                    <thead class="text-xs text-white uppercase bg-blue-800">
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
                                    <x-button-href @click="$dispatch('createRoleModal')" wire:loading.attr="disabled" class="bg-green-600 hover:bg-green-500">
                                        Crear
                                    </x-button-href>
                                @endcan
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100">
                        @forelse ($roles as $role)
                            {{-- @if ($loop->last)
                                <tr class="bg-white hover:bg-gray-50">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $role->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a @click="$dispatch('roleModal',{ role: {{ $role->id }}})" class="font-medium text-blue-600 cursor-pointer hover:underline">Editar</a>
                                    </td>
                                </tr>
                            @else --}}
                                <tr class="bg-white  border-b border-blue-600 ">
                                    <td scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                        {{ $role->name }}
                                    </td>
                                    <td class="px-6 py-4 flex gap-6">
                                        @can('role:edit')
                                            <a @click="$dispatch('editRoleModal',{ role: {{ $role->id }}})" class="font-bold text-blue-500 cursor-pointer hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500 cursor-pointer  hover:text-yellow-600">
                                                    <path  d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                </svg>
                                            </a>
                                        @endcan
                                        @can('role:delete')
                                            <a wire:click='deleteRole({{ $role->id }})' wire:confirm='Seguro que desea eliminar este rol?.' class="font-bold ml-1 text-red-500 cursor-pointer hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600 hover:text-red-800">
                                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                            {{-- @endif --}}
                        @empty
                            <tr>
                                <td class="px-6 py-4 text-center text-xl col-span-5" colspan="6">
                                    No hay roles creados.
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
    <livewire:roles-and-permissions.modals.edit :role="$role">
</div>
