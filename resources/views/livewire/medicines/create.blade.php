<x-dialog-modal maxWidth='2xl' wire:model.live="showAddBeneficiaryModal">
    <x-slot name="title" >
        <h1 class="text-center border-b">Agregar beneficiario</h1>
    </x-slot>

    <x-slot name="content">
        <form wire:submit='add' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
            <div class="mt-5 w-full sm:w-1/2 px-3">
                <x-label for="comercial_name" value="Nombre Comercial" />
                <x-input id="comercial_name" wire:model='comercial_name' class="block mt-1 w-full truncate" type="text" name="comercial_name" :value="old('comercial_name')" autocomplete="comercial_name" />
                <x-input-error class="text-xs" for="comercial_name"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label for="composition" value="Composición" />
                <x-input id="composition" wire:model='composition' class="block mt-1 w-full truncate" type="text" name="composition" :value="old('composition')" autocomplete="composition" />
                <x-input-error class="text-xs" for="composition"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label for="active_component" value="Componente Activo" />
                <x-input id="active_component" wire:model='active_component' class="block mt-1 w-full truncate" type="text" name="active_component" :value="old('active_component')" autocomplete="active_component" />
                <x-input-error class="text-xs" for="active_component"/>
            </div>
            <div class=" mt-5 w-full px-3 sm:w-1/2">
                <x-label for="type" value="Tipo"/>
                <x-input id="type" wire:model='type' class="block mt-1 w-full truncate" type="text" name="type" :value="old('type')" autocomplete="type" />
                <x-input-error class="text-xs" for="type"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label for="laboratory" value="Laboratorio" />
                <x-input id="laboratory" wire:model='laboratory' class="block mt-1 w-full" type="text" name="laboratory" :value="old('laboratory')" autocomplete="laboratory" />
                <x-input-error class="text-xs" for="laboratory"/>
            </div>
            <div class=" mt-5 w-full px-3 sm:w-1/2">
                <x-label for="amount" value=" Cantidad" />
                <x-input id="amount" wire:model='amount' class="block mt-1 w-full truncate" type="text" name="amount" :value="old('amount')" autocomplete="amount" />
                <x-input-error class="text-xs" for="amount"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label for="entry_date" value="Fecha de Ingreso" />
                <x-input id="entry_date" wire:model='entry_date' class="block mt-1 w-full truncate" type="date" name="entry_date" :value="old('entry_date')" autocomplete="entry_date" />
                <x-input-error class="text-xs" for="entry_date"/>
            </div>
            <div class="mt-5 w-full px-3  sm:w-4/2">
                <x-label for="expiration_date" value="Fecha de Vencimiento" />
                <x-input id="expiration_date" wire:model='expiration_date' class="block mt-1 w-full truncate" type="date" name="expiration_date" :value="old('expiration_date')" autocomplete="expiration_date" />
                <x-input-error class="text-xs" for="expiration_date"/>
            </div>
            {{-- <div class="mt-5 w-full px-3 sm:w-1/2" >
                <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
                <select wire:model='gender' id="gender" name="gender" class=" cursor-pointer mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                    <option value="#" class="text-center">Seleccionar</option>
                    @foreach ($genders as $value => $name)
                        <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                    @endforeach
                </select>
                <x-input-error class="text-xs" for="gender"/>
            </div> --}}
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="toggleModal()" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-success-button class="ms-3" wire:click="add" wire:loading.attr="disabled">
            Agregar
        </x-success-button>
    </x-slot>
</x-dialog-modal>
