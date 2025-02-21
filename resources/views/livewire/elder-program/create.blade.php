<div>
    <div class="py-12" x-data='{ citizenExists: $wire.entangle("citizenExists") }'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label for="document" value="Cédula de Identidad " class="text-black " />
                        <div class="flex items-center">
                            <x-input id="document" wire:model='document' class="block mt-1 w-full truncate rounded-none rounded-l-md" type="text" name="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                            <button wire:click='searchCitizen' type="button" class="p-[9px] mt-1 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-none rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="first_names" value="Nombres" class="text-black " />
                        <div>
                            <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" x-bind:disabled="citizenExists" />
                            <x-input-error class="text-xs" for="first_names"/>
                        </div>
                        <h1>{{ $first_names }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="last_names" value="Apellidos" class="text-black " />
                        <div>
                            <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" x-bind:disabled="citizenExists"/>
                            <x-input-error class="text-xs" for="last_names"/>
                        </div>
                        <h1>{{ $last_names }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="occupation" value="Ocupación" class="text-black " />
                        <div>
                            <x-input id="occupation" wire:model='occupation' class="block mt-1 w-full truncate" type="text" name="occupation" x-bind:disabled="citizenExists"/>
                            <x-input-error class="text-xs" for="last_names"/>
                        </div>
                        <h1>{{ $occupation }}</h1>
                    </div>
                     <div class="mt-5 w-full px-3 sm:w-1/6" >
                        <x-label for="gender" value="Sexo" class="block   text-black"/>
                        <div>
                            <select wire:model='gender' id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:border-blue-500 focus:ring-blue-500  shadow-sm sm:text-sm rounded-md text-center" x-bind:disabled="citizenExists">
                                <option value="#" class="text-center ">Seleccionar</option>
                                @foreach ($genders as $value => $name)
                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="gender"/>
                        </div>
                        <h1>{{ $gender }}</h1>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="email" value="Correo Electrónico" class="text-black " />
                        <div>
                            <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" x-bind:disabled="citizenExists"  />
                            <x-input-error class="text-xs" for="email"/>
                        </div>
                        <h1>{{ $email }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black " />
                        <div>
                            <x-input id="phone_number" wire:model='phone_number' class="block mt-1 w-full truncate" type="text" name="phone_number"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');" x-bind:disabled="citizenExists"/>
                            <x-input-error class="text-xs" for="phone_number"/>
                        </div>
                        <h1>{{ $phone_number }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number_2" value="Teléfono 2" class="text-black " />
                        <div>
                            <x-input id="phone_number_2" wire:model='phone_number_2' class="block mt-1 w-full truncate" type="text" name="phone_number_2"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');" x-bind:disabled="citizenExists"/>
                            <x-input-error class="text-xs" for="phone_number_2"/>
                        </div>
                        <h1>{{ $phone_number_2 }}</h1>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="education_level" value="Nivel de Instrucción" class="text-black " />
                        <div>
                            <x-input id="education_level" wire:model='education_level' class="block mt-1 w-full truncate" type="text" name="education_level"   x-bind:disabled="citizenExists"/>
                            <x-input-error class="text-xs" for="education_level"/>
                        </div>
                        <h1>{{ $education_level }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="civil_status" value="Edo. Civil" class="block   text-black"/>
                        <div>
                            <select wire:model='civil_status' id="civil_status" name="civil_status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center" x-bind:disabled="citizenExists">
                                <option value="#" class="text-center ">Seleccionar</option>
                                @foreach ($civil_statuses as $value => $name)
                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h1>{{ $civil_status }}</h1>
                    </div>
                    {{-- <div class=" mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="gender" value="Sexo" class="text-black" />
                        <x-input id="gender" wire:model='gender' class="block mt-1 w-full truncate" type="text" name="gender"   />
                        <x-input-error class="text-xs" for="gender"/>
                    </div> --}}
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="dob" value="Fecha de Nacimiento" class="text-black" />
                        <div>
                            <x-input id="dob" wire:model='dob' class="block mt-1 w-full " type="date" name="dob"/>
                            <x-input-error class="text-xs" for="dob" x-bind:disabled="citizenExists"/>
                        </div>
                        <h1>{{ $dob }}</h1>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="city_of_birth" value="Lugar de Nacimiento" class="text-black" />
                        <div>
                            <x-input id="city_of_birth" wire:model='city_of_birth' class="block mt-1 w-full truncate" type="text" name="city_of_birth"/>
                            <x-input-error class="text-xs" for="city_of_birth" x-bind:disabled="citizenExists"/>
                        </div>
                        <h1>{{ $city_of_birth }}</h1>
                    </div>
                    {{-- <div class="mt-5 w-full px-3 sm:w-1/4">
                        <div>
                            <x-search-select wire:ignore name="estado" label="Estado" :options="$states"  />
                            <x-input-error class="text-xs" for="estado"/>
                        </div>
                        <h1>{{ $estado }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="municipio" value="Municipio" class="block   text-black"/>
                        <div>
                            <select wire:model.live='municipio' id="municipio" name="municipio" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center ">Seleccionar</option>
                                @foreach ($municipios as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="municipio"/>
                        </div>
                        <h1>{{ $municipio }}</h1>
                    </div> --}}
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="parroquia" value="Parroquia" class="block   text-black"/>
                        <div>
                            <select wire:model='parroquia' id="parroquia" name="parroquia" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                                <option value="#" class="text-center ">Seleccionar</option>
                                @foreach ($parroquias as $value => $name)
                                    <option value="{{ $value }}" class="text-center cursor-pointer">{{ $name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="text-xs" for="parroquia"/>
                        </div>
                        <h1>{{ $parroquia }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección de Habitación" class="text-black"/>
                        <div>
                            <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address"/>
                            <x-input-error class="text-xs" for="address"/>
                        </div>
                        <h1>{{ $address }}</h1>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="medical_aspect" value="Aspecto Médico" class="text-black"/>
                        <div>
                            <x-input id="medical_aspect" wire:model='medical_aspect' class="block mt-1 w-full truncate" type="text" name="medical_aspect"/>
                            <x-input-error class="text-xs" for="medical_aspect"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-3/1 ">
                        <x-label for="social_economy" value="Aspecto Socio-Económico" class="text-black"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="family_monthly_income" value="Ingreso Familiar" class="text-black"/>
                        <div>
                            <x-input id="family_monthly_income" wire:model='family_monthly_income' class="block mt-1 w-full truncate" type="text" name="family_monthly_income" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                            <x-input-error class="text-xs" for="family_monthly_income"/>
                        </div>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="family_monthly_expenses" value="Egreso Familiar" class="text-black"/>
                        <div>
                            <x-input id="family_monthly_expenses" wire:model='family_monthly_expenses' class="block mt-1 w-full truncate" type="text" name="family_monthly_expenses" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                            <x-input-error class="text-xs" for="family_monthly_expenses"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="psycho_social" value="Aspecto Psico-social" class="text-black"/>
                        <div>
                            <x-input id="psycho_social" wire:model='psycho_social' class="block mt-1 w-full truncate" type="text" name="psycho_social"/>
                            <x-input-error class="text-xs" for="psycho_social"/>
                        </div>
                    </div>
                    
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="environmental_physics" value="Aspecto Físico-ambiental" class="text-black"/>
                        <div>
                            <x-input id="environmental_physics" wire:model='environmental_physics' class="block mt-1 w-full truncate" type="text" name="environmental_physics"/>
                            <x-input-error class="text-xs" for="environmental_physics"/>
                        </div>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-4/2 " x-show="!citizenExists">
                        <x-label for="familyMembers[]" value="Grupo Familiar" class="text-black" />
                        <x-table.table class="w-full ">
                            <x-slot name="thead">
                                <tr class="bg-blue-800 text-white ">
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
                                        Edad
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Parentesco
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        <button wire:click='addFamilyMember' type="button" class="inline-block cursor-pointer rounded-md bg-blue-900 hover:bg-blue-500 px-6 pb-2 pt-2.5 text-xs  uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @forelse($familyMembers as $index => $familyMember)
                                    <tr class="bg-white shadow-md border border-blue-700 text-center">
                                        <x-table.td class="text-black">
                                            <x-input id="family_document" wire:model='familyMembers.{{ $index }}.document' class="block mt-1 w-full truncate" type="text" name="family_document"   oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                                            <x-input-error class="text-xs" for="familyMembers.{{ $index }}.document"/>
                                        </x-table.td>
                                        <x-table.td class="text-black">
                                            <x-input id="family_first_names" wire:model='familyMembers.{{ $index }}.first_names' class="block mt-1 w-full truncate" type="text" name="family_first_names"   />
                                            <x-input-error class="text-xs" for="familyMembers.{{ $index }}.first_names"/>
                                        </x-table.td>
                                        <x-table.td class="text-black   ">
                                            <x-input id="family_last_names" wire:model='familyMembers.{{ $index }}.last_names' class="block mt-1 w-full truncate" type="text" name="family_last_names"   />
                                            <x-input-error class="text-xs" for="familyMembers.{{ $index }}.last_names"/>
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <x-input id="family_age" wire:model='familyMembers.{{ $index }}.age' class="block mt-1 w-full truncate text-black"  min="0" type="number" name="family_age" value="0" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                                            <x-input-error class="text-xs" for="familyMembers.{{ $index }}.age"/>
                                        </x-table.td>
                                        <x-table.td class="text-black   ">
                                            <x-input id="family_relation" wire:model='familyMembers.{{ $index }}.relation' class="block mt-1 w-full truncate" type="text" name="family_relation"   />
                                            <x-input-error class="text-xs" for="familyMembers.{{ $index }}.relation"/>
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <button wire:click='removeFamilyMember({{ $index }})' type="button" class="text-white bg-red-600 border border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center " style="border-radius: 50%" >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </x-table.td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 bg-white text-center text-black text-xl">
                                            No hay Grupo Familiar
                                        </td>
                                    </tr>
                                @endforelse
                            </x-slot>
                        </x-table.table>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('elder-program.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-green-600 hover:bg-green-500">
                            Registrar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <livewire:officials.beneficiaries.edit /> --}}

</div>
