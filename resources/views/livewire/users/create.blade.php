<div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-72 px-3">
                        <x-label for="document" value="Cedula de Identidad" />
                        <x-input id="document" wire:model='document' class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" autocomplete="document" />
                        <x-input-error for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="first_names" value="Nombres" />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="dob" value="Fecha de Nacimiento" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error for="dob"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="name" value="Rol" />
                        <x-select
                            name="role"
                            wire="live"
                            placeholder="Seleccionar"
                            :values="$roles"
                        />
                    </div>
                    <div class="mt-5  w-full px-3 sm:w-1/2">
                        <x-label for="email" value="Correo Electronico" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" wire:model='password' class="block mt-1 w-full truncate" type="text" name="password" :value="old('password')" />
                        <x-input-error for="password"/>
                    </div>
                    <x-button class="ms-4 mt-5 mb-5 bg-blue-900">
                        Agregar
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>
