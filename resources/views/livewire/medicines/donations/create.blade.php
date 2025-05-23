<div>
    <div class="py-12" x-data='{ citizenExists: $wire.entangle("citizenExists"), newMed: $wire.entangle("newMed") }'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit.prevent='save' class="mt-5 mx-10 container-md text-center flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Datos del Donante</p>
                    </div>
                    <div class="mt-5 w-full sm:w-1/4 px-3">
                        <x-label for="document" value="Cédula de Identidad" class="text-black" />
                        <div class="flex items-center">
                            <x-input id="document" wire:model='document' class="block mt-1 w-full truncate rounded-none rounded-l-md disabled:text-slate-400" type="text" name="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');" x-bind:disabled="citizenExists" />
                            <button x-show="!citizenExists" @click='$wire.searchCitizen' type="button" class="p-[9px] mt-1 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-none rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            <button x-show="citizenExists" @click='$wire.clearSearch' type="button" class="p-[9px] mt-1 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-none rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="first_names" value="Nombres" class="text-black" />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="last_names" value="Apellidos" class="text-black" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="gender" value="Sexo" class="block text-sm font-medium text-black"/>
                        <select wire:model='gender' id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option value="" class="text-center">Seleccionar</option>
                            @foreach ($genders as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="gender"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="email" value="Correo Electrónico" class="text-black" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error class="text-xs" for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black" />
                        <x-input id="phone_number" wire:model='phone_number' class="block mt-1 w-full truncate" type="text" name="phone_number" :value="old('phone_number')" autocomplete="phone_number" oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');" />
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="civil_status" value="Edo. Civil" class="block text-sm font-medium text-black"/>
                        <select wire:model='civil_status' id="civil_status" name="civil_status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option>Casado</option>
                            <option>Soltero</option>
                            <option>Divorciado</option>
                            <option>Viudo</option>
                        </select>
                        <x-input-error class="text-xs" for="civil_status"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="dob" value="Fecha de Nacimiento" class="text-black" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="estado" value="Estado" class="block text-sm text-center font-medium text-black"/>
                        <div {{-- x-show="!citizenExists" --}}>
                            <x-search-select wire:ignore name="estado" :options="$states" />
                            <x-input-error class="text-xs" for="estado"/>
                        </div>
                        <div {{-- x-show="citizenExists" --}}>
                            <h1>{{ $citizen?->estado->estado }}</h1>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="municipio" value="Municipio" class="block text-black"/>
                        <div {{-- x-show="!citizenExists" --}}>
                            <select wire:model.live='municipio' id="municipio" name="municipio" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center">Seleccionar</option>
                                @foreach ($municipios as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="municipio"/>
                        </div>
                        <div {{-- x-show="citizenExists" --}}>
                            <h1>{{ $citizen?->municipio->municipio }}</h1>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="parroquia" value="Parroquia" class="block text-black"/>
                        <div {{-- x-show="!citizenExists" --}}>
                            <select wire:model='parroquia' id="parroquia" name="parroquia" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center">Seleccionar</option>
                                @foreach ($parroquias as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="parroquia"/>
                        </div>
                        <div {{-- x-show="citizenExists" --}}>
                            <h1>{{ $citizen?->parroquia->parroquia }}</h1>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-2/4">
                        <x-label for="address" value="Dirección" class="text-black"/>
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-2/4">
                        <x-label for="observation" value="Observación" class="text-black"/>
                        <x-input id="observation" wire:model='observation' class="block mt-1 w-full truncate" type="text" name="observation" :value="old('observation')" autocomplete="observation" />
                        <x-input-error class="text-xs" for="observation"/>
                    </div>
                    <div class="mt-8 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Medicamentos</p>
                        <x-input-error class="text-xs" for="donation_medicines"/>
                    </div>
                    {{-- <div class="mt-5 w-full px-3 sm:w-4/1">
                        <x-toggle label="Buscar medicamento" name="newMed"/>
                    </div> --}}
                    {{-- <div x-show="newMed" class="mt-5 w-full z-50 px-3 sm:w-1/4">
                        <x-search-select wire:ignore name="medicine" label="Seleccionar Medicamento" :options="$all_medicines" placeholder="Seleccione un medicamento"/>
                        <x-input-error class="text-xs" for="medicine"/>
                    </div> --}}
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="name" value="Nombre Comercial" />
                        <x-input id="name" wire:model='name' class="block mt-1 w-full truncate" type="text" name="name" :value="old('name')" autocomplete="name" />
                        <x-input-error class="text-xs" for="name"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-1/4">
                        <label for="presentation" class="block text-sm font-medium text-gray-900">Presentación(Composición)</label>
                        <div class="flex items-center">
                            <select wire:model='presentation' id="presentation" name="presentation" class="cursor-pointer rounded-l mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                                <option value="#" class="text-center">Seleccionar</option>
                                @foreach ($presentations as $value => $name)
                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-input-error class="text-xs" for="presentation"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="active_component" value="Componente Activo" />
                        <x-input id="active_component" wire:model='active_component' class="block mt-1 w-full truncate" type="text" name="active_component" :value="old('active_component')" autocomplete="active_component" />
                        <x-input-error class="text-xs" for="active_component"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-[250px]">
                        <x-label for="composition" value="Cantidad (Composición)" />
                        <div class="flex items-center">
                            <x-input id="composition_quantity" wire:model='composition_quantity' class="block mt-1 w-full truncate" type="text" name="composition_quantity" autocomplete="composition_quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                            <select wire:model='composition' id="composition" name="composition" class="cursor-pointer rounded-r mt-1 ml-0 block w-1/2 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                                @foreach ($compositions as $value => $name)
                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-input-error class="text-xs" for="composition"/>
                        <x-input-error class="text-xs" for="composition_quantity"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-[27.50%]">
                        <x-label for="laboratory" value="Laboratorio" />
                        <x-input id="laboratory" wire:model='laboratory' class="block mt-1 w-full truncate" type="text" name="laboratory" :value="old('laboratory')" autocomplete="laboratory" />
                        <x-input-error class="text-xs" for="laboratory"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-[190px]">
                        <x-label for="stock" value="Unidades" />
                        <x-input id="stock" wire:model='stock' class="block mt-1 w-full truncate" type="number" name="stock" :value="old('stock')" autocomplete="stock" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="stock"/>
                    </div>
                    <div {{-- x-show="!newMed" --}} class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="entry_date" value="Fecha de Ingreso" />
                        <x-input id="entry_date" wire:model='entry_date' class="block mt-1 w-full truncate" type="date" name="entry_date" :value="old('entry_date')" autocomplete="entry_date" />
                        <x-input-error class="text-xs" for="entry_date"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="expiration_date" value="Fecha de Vencimiento" />
                        <x-input id="expiration_date" wire:model='expiration_date' class="block mt-1 w-full truncate" type="date" name="expiration_date" :value="old('expiration_date')" autocomplete="expiration_date" />
                        <x-input-error class="text-xs" for="expiration_date"/>
                    </div>
                    <div class="mt-10 w-full px-1 sm:w-[150px] break-words">
                        <x-button type="button" wire:click='addMedicine' class=" text-white  bg-green-600 hover:bg-green-500 ">
                            <p>Agregar <br/> Medicamento</p>
                        </x-button>
                    </div>
                    <div class="mt-5 w-full px-3">
                        <table class="min-w-full bg-white rounded-lg shadow-md border border-blue-700 ">
                            <thead class="bg-blue-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Nombre Comercial
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Cantidad (Composición)
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Presentación
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Laboratorio
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Unidades
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Fecha de Ingreso
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Fecha de Vencimiento
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">

                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($donation_medicines as $index => $medicine)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['name'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['composition_quantity'].$medicine['composition'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['presentation']->label() }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['laboratory'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['stock'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['entry_date'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $medicine['expiration_date'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button type="button" wire:click='removeMedicine({{ $index }})' class="text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
                                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td class="px-6 py-4 text-center text-xl col-span-5 text-black bg-white" colspan="8">
                                        No hay Medicamentos.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class=" w-full px-3 sm:w-3/1 mt-5 mx-10 container-md text-center flex items-center justify-center flex-wrap">
                        <x-button-href href="" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-green-600 hover:bg-green-500">
                            Agregar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
