<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-1/2 px-3">
                        <x-label for="document" value="Cédula de Identidad" />
                        <x-input id="document" wire:model='document' class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" autocomplete="document" />
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="first_names" value="Nombres" />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="dob" value="Fecha de Nacimiento" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="email" value="Correo Electrónico" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error class="text-xs" for="email"/>

                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="phone" value="Teléfono" />
                        <x-input id="phone" wire:model='phone' class="block mt-1 w-full truncate" type="text" name="phone" :value="old('phone')" autocomplete="phone" oninput="this.value = this.value.replace(/[^0-9+- ]/g, '');" />
                        <x-input-error class="text-xs" for="phone"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4" >
                        <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
                        <select id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center">Seleccionar</option>
                            @foreach ($genders as $name => $value)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/4">
                        <x-label for="address" value="Dirección" />
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-4/4">
                        <x-table.table class="w-full">
                            <x-slot name="thead">
                                <tr class="bg-blue-900 text-white ">
                                    <x-table.th class="pb-3 text-center">
                                        Cédula
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Nombre/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Apellido/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        <button @click="$dispatch('addBeneficiaryModal')" type="button" class="inline-block rounded-md bg-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @foreach($beneficiaries as $index => $beneficiary)
                                    <tr class="bg-slate-300 shadow-md border border-gray-700">
                                        <x-table.td>
                                            {{ $beneficiary['document'] }}
                                        </x-table.td>
                                        <x-table.td>
                                            {{ $beneficiary['first_names'] }}
                                        </x-table.td>
                                        <x-table.td>
                                            {{ $beneficiary['last_names'] }}
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <button wire:click="removeBeneficiary({{ $index }})" type="button" class="text-white bg-red-600 border border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center " style="border-radius: 50%" >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                                @error('beneficiaries')
                                    <tr><x-table.td colspan="3"><span class="text-danger"><b>{{ $message }}</b></span></x-table.td></tr>
                                @enderror
                            </x-slot>
                        </x-table.table>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('officials.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-blue-900">
                            Agregar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <livewire:officials.beneficiaries.create :beneficiaries="$beneficiaries"/>
</div>
