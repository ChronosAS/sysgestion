<div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-72 px-3">
                        <x-label for="document" value="Cedula de Identidad" />
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
                        <x-label for="email" value="Correo Electronico" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error class="text-xs" for="email"/>

                    </div>
                    <div class="mt-5  w-full px-3 sm:w-1/2">
                        <x-label for="phone" value="Teléfono" />
                        <x-input id="phone" wire:model='phone' class="block mt-1 w-full truncate" type="text" name="phone" :value="old('phone')" autocomplete="phone" />
                        <x-input-error class="text-xs" for="phone"/>
                    </div>
                    <div class="mt-5 w-full relative px-3 sm:w-1/2" >
            
                        <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
                        <select id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                            <option value="choose" class="text-center">Seleccionar</option>
                            <option value="male" class="text-center">Masculino</option>
                            <option value="female" class="text-center">Femenino</option>
                        </select>
                    
                    </div>
                    <div class="mt-5 w-full px-3 ">
                        <x-label for="address" value="Dirección" />
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                <x-button-href href="{{ route('users.administration') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                    Regresar
                </x-button-href>
                <x-button class="ms-4 mt-5 mb-5 bg-blue-900">
                    Agregar
                </x-button>
            </form>
            </div>
        </div>
    </div>
</div>
