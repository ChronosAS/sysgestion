<div>
    <div class="py-12" >
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
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="grade" value="Grado de Instrucción" class="text-black" />
                        <x-input id="grade" wire:model='grade' class="block mt-1 w-full truncate" type="text" name="grade" :value="old('grade')" autocomplete="grade" />
                        <x-input-error class="text-xs" for="grade"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="civil" value="Edo. Civil" class="block text-sm font-medium text-black"/>
                        <select wire:model='civil' id="civil" name="civil" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option>Casado</option>
                            <option>Soltero</option>
                            <option>Divorciado</option>
                            <option>Viudo</option>
                        </select>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <div>
                            <x-search-select wire:ignore name="estado" label="Estado" :options="$states" />
                            <x-input-error class="text-xs" for="estado"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="municipio" value="Municipio" class="block text-black"/>
                        <div>
                            <select wire:model.live='municipio' id="municipio" name="municipio" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center">Seleccionar</option>
                                @foreach ($municipios as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="municipio"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="parroquia" value="Parroquia" class="block text-black"/>
                        <div>
                            <select wire:model='parroquia' id="parroquia" name="parroquia" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center">Seleccionar</option>
                                @foreach ($parroquias as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="parroquia"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="dob" value="Fecha de Nacimiento" class="text-black" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error class="text-xs" for="dob"/>
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
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="search_medicines" value="Busqueda De Medicamentos" class="text-black" />
                        <div class="flex items-center">
                            <x-input id="search_medicines" wire:model='search_medicines' class="block mt-1 w-full truncate rounded-none rounded-l-md disabled:text-slate-400" type="text" name="search_medicines"  />
                            <button  type="button" class="p-[9px] mt-1 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-none rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            {{-- <button x-show="citizenExists" @click='$wire.clearSearch' type="button" class="p-[9px] mt-1 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-none rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button> --}}
                        </div>
                        <x-input-error class="text-xs" for="search_medicines"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="name" value="Nombre Comercial" />
                        <x-input id="name" wire:model='name' class="block mt-1 w-full truncate" type="text" name="name" :value="old('name')" autocomplete="name" />
                        <x-input-error class="text-xs" for="name"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
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
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="active_component" value="Componente Activo" />
                        <x-input id="active_component" wire:model='active_component' class="block mt-1 w-full truncate" type="text" name="active_component" :value="old('active_component')" autocomplete="active_component" />
                        <x-input-error class="text-xs" for="active_component"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-[250px]">
                        <x-label for="composition_unit" value="Cantidad (Composición)" />
                        <div class="flex items-center">
                            <x-input id="composition_unit" wire:model='composition_unit' class="block mt-1 w-full truncate" type="text" name="composition_unit" autocomplete="composition_unit" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                            <select wire:model='composition' id="composition" name="composition" class="cursor-pointer rounded-r mt-1 ml-0 block w-1/2 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                                @foreach ($compositions as $value => $name)
                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-input-error class="text-xs" for="composition"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-[27.50%]">
                        <x-label for="laboratory" value="Laboratorio" />
                        <x-input id="laboratory" wire:model='laboratory' class="block mt-1 w-full truncate" type="text" name="laboratory" :value="old('laboratory')" autocomplete="laboratory" />
                        <x-input-error class="text-xs" for="laboratory"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-[190px]">
                        <x-label for="stock" value="Unidades" />
                        <x-input id="stock" wire:model='stock' class="block mt-1 w-full truncate" type="number" name="stock" :value="old('stock')" autocomplete="stock" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="stock"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="entry_date" value="Fecha de Ingreso" />
                        <x-input id="entry_date" wire:model='entry_date' class="block mt-1 w-full truncate" type="date" name="entry_date" :value="old('entry_date')" autocomplete="entry_date" />
                        <x-input-error class="text-xs" for="entry_date"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="expiration_date" value="Fecha de Vencimiento" />
                        <x-input id="expiration_date" wire:model='expiration_date' class="block mt-1 w-full truncate" type="date" name="expiration_date" :value="old('expiration_date')" autocomplete="expiration_date" />
                        <x-input-error class="text-xs" for="expiration_date"/>
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
