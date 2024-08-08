<div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <header class="text-center text-xl  mt-5 font-black font-sans underline">Usuarios</header>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <div class="relative overflow-x-auto  sm:rounded-lg">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <div class="flex space-x-5">
                        {{-- <x-select
                            name="type"
                            wire="live"
                            placeholder="Todos los Tipos"
                            :values="App\Enum\UserType::options()"
                        /> --}}

                        <x-select
                            name="is_active"
                            wire="live"
                            placeholder="Estado"
                            :values="$status"
                        />
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
                    </div>
                </div>
                <table class="w-full border border-gray-200  text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Cedula
                                    <a href="#" wire:click.prevent="sortBy('document')" ><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Nombre/s
                                    <a href="#" wire:click.prevent="sortBy('first_names')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Apellido/s
                                    <a href="#" wire:click.prevent="sortBy('first_names')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Correo
                                    <a href="#" wire:click.prevent="sortBy('email')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Estado
                                    <a href="#" wire:click.prevent="sortBy('status')"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                @can('user:create')
                                    <x-button-href href="{{ route('users.create') }}">
                                        Crear
                                    </x-button-href>
                                @endcan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            @if ($loop->last)
                                <tr class="bg-white hover:bg-gray-50">
                                    {{-- <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                        </div>
                                    </td> --}}
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->document }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->first_names }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->last_names }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($user->status == 1)
                                        <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                            <span class="flex items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Activo</span>
                                        </a>
                                        @else
                                        <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                            <span class="flex items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-red-600 rounded-full me-1.5 flex-shrink-0"></span>Inactivo</span>
                                        </a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{-- route('users.show',$user) --}}" wire:navigate class="font-medium text-blue-600 hover:underline">Ver</a>
                                        <a href="{{ route('users.edit',$user) }}" wire:navigate class="ml-1 font-medium text-blue-600 hover:underline">Editar</a>
                                    </td>
                                </tr>
                            @else
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $user->document }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->first_names }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->last_names }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($user->status == 1)
                                        <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                            <span class="flex items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Activo</span>
                                        </a>
                                        @else
                                        <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                            <span class="flex items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-red-600 rounded-full me-1.5 flex-shrink-0"></span>Inactivo</span>
                                        </a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{-- route('users.show',$user) --}}" wire:navigate class="font-medium text-blue-600 hover:underline">Ver</a>
                                        <a href="{{ route('users.edit',$user) }}" wire:navigate class="ml-1 font-medium text-blue-600 hover:underline">Editar</a>
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
                    {{ $users->links('vendor.livewire.tailwind-pagination',data: ['scrollTo'=>false]) }}
                </div>
            </div>
        </div>
    </div>
</div>
