<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-1/4 px-3 ">
                        <x-label for="document" value="Cédula de Identidad " class="text-black " />
                        <x-input id="document" wire:model='document' class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" autocomplete="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="first_names" value="Nombres" class="text-black " />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="last_names" value="Apellidos" class="text-black " />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6" >
                        <x-label for="gender" value="Sexo" class="block text-sm font-medium text-black"/>
                        <select wire:model='gender' id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center ">Seleccionar</option>
                            @foreach ($genders as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="gender"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="email" value="Correo Electrónico" class="text-black " />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error class="text-xs" for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black " />
                        <x-input id="phone_number" wire:model='phone_number' class="block mt-1 w-full truncate" type="text" name="phone_number" :value="old('phone_number')" autocomplete="phone_number" oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');" />
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="grade" value="Grado de Instrucción" class="text-black " />
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
                    <div class=" mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="state" value="Estado" class="text-black" />
                        <x-input id="state" wire:model='state' class="block mt-1 w-full truncate" type="text" name="state" :value="old('state')" autocomplete="state" />
                        <x-input-error class="text-xs" for="state"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="municipality" value="Municipio" class="text-black" />
                        <x-input id="municipality" wire:model='municipality' class="block mt-1 w-full truncate" type="text" name="municipality" :value="old('municipality')" autocomplete="municipality" />
                        <x-input-error class="text-xs" for="municipality"/> 
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="parish" value="Parroquia" class="text-black" />
                        <x-input id="parish" wire:model='parish' class="block mt-1 w-full truncate" type="text" name="parish" :value="old('parish')" autocomplete="parish" />
                        <x-input-error class="text-xs" for="parish"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="dob" value="Fecha de Nacimiento" class="text-black" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full " type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-2/4">
                        <x-label for="address" value="Dirección" class="text-black"/>
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-2/4">
                        <x-label for="observation" value="Observación" class="text-black"/>
                        <x-input id="observation" wire:model='observation' class="block mt-1 w-full truncate" type="text" name="observation" :value="old('observation')" autocomplete="observation" />
                        <x-input-error class="text-xs" for="observation"/>
                    </div>
                <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <x-button-href href="{{ url()->previous() }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                        Regresar
                    </x-button-href>
                    <x-button class="ms-4 mt-5 mb-5 bg-yellow-500 hover:bg-yellow-600">
                        Actualizar
                    </x-button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
