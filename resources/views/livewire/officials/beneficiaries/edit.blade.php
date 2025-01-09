<x-dialog-modal maxWidth='2xl' wire:model.live="showAddBeneficiaryModal">
    <x-slot name="title" >
        <h1 class="text-center border-b">Agregar beneficiario</h1>
    </x-slot>

    <x-slot name="content">
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
            <div class="mt-5 w-full px-3 sm:w-1/2" >
                <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
                <select id="gender" name="gender" class=" cursor-pointer mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                    <option value="choose" class="text-center">Seleccionar</option>
                    <option value="male" class="text-center">Masculino</option>
                    <option value="female" class="text-center">Femenino</option>
                </select>
            </div>
             <div class=" mt-5 w-full px-3 sm:w-1/2">
                <x-label for="relationship" value="Relación"/>
                <x-input id="relationship" wire:model='relationship' class="block mt-1 w-full truncate" type="text" name="relationship" :value="old('relationship')" autocomplete="relationship" />
                <x-input-error class="text-xs" for="relationship"/>
            </div>
            <div class="mt-5 w-full px-3  sm:w-4/2">
                <x-label for="address" value="Dirección" />
                <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                <x-input-error class="text-xs" for="address"/>
            </div>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="toggleModal()" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-success-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
            Crear
        </x-success-button>
    </x-slot>
</x-dialog-modal>

