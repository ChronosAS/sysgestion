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
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="full_name" value="Nombres y Apellidos" class="text-black " />
                        <x-input id="full_name" wire:model='full_name' class="block mt-1 w-full truncate" type="text" name="full_name" :value="old('full_name')" autocomplete="full_name" />
                        <x-input-error class="text-xs" for="full_name"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="last_names" value="Ocupación" class="text-black " />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
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
                        <x-label for="grade" value="Nivel de Instrucción" class="text-black " />
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
                        <x-label for="gender" value="Sexo" class="text-black" />
                        <x-input id="gender" wire:model='gender' class="block mt-1 w-full truncate" type="text" name="gender" :value="old('gender')" autocomplete="gender" />
                        <x-input-error class="text-xs" for="gender"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="pob" value="Lugar de Nacimiento" class="text-black" />
                        <x-input id="pob" wire:model='pob' class="block mt-1 w-full truncate" type="text" name="pob" :value="old('pob')" autocomplete="pob" />
                        <x-input-error class="text-xs" for="pob"/> 
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
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección de Habitación" class="text-black"/>
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
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
