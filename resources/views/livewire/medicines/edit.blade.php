<x-dialog-modal maxWidth='2xl' wire:model.live="showEditMedicineModal">
    <x-slot name="title" >
        <h1 class="text-center border-b">Editar medicamento</h1>
    </x-slot>

    <x-slot name="content">
        <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
            <div class="mt-5 w-full sm:w-1/2 px-3">
                <x-label for="name" value="Nombre Comercial" class="text-white" />
                <x-input id="name" wire:model='name' class="block mt-1 w-full truncate" type="text" name="name" :value="old('name')" autocomplete="name" />
                <x-input-error class="text-xs" for="name"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2" >
                <label for="presentation" class="block text-sm font-medium text-white">Presentación(Composición)</label>
                <div class="flex items-center">
                    <select wire:model='presentation' id="presentation" name="presentation" class="cursor-pointer rounded-l mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                        <option value="#" class="text-center">Seleccionar</option>
                        @foreach ($presentations as $value => $name)
                            <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                        @endforeach
                    </select>
                    <select wire:model='composition' id="composition" name="composition" class="cursor-pointer rounded-r mt-1 ml-0 block w-1/2 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                        @foreach ($compositions as $value => $name)
                            <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <x-input-error class="text-xs" for="presentation"/>
                <x-input-error class="text-xs" for="composition"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label class="text-white" for="active_component" value="Componente Activo" />
                <x-input id="active_component" wire:model='active_component' class="block mt-1 w-full truncate" type="text" name="active_component" :value="old('active_component')" autocomplete="active_component" />
                <x-input-error class="text-xs" for="active_component"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label class="text-white" for="laboratory" value="Laboratorio" />
                <x-input id="laboratory" wire:model='laboratory' class="block mt-1 w-full" type="text" name="laboratory" :value="old('laboratory')" autocomplete="laboratory" />
                <x-input-error class="text-xs" for="laboratory"/>
            </div>
            <div class=" mt-5 w-full px-3 sm:w-1/2">
                <x-label class="text-white" for="stock" value=" Cantidad" />
                <x-input id="stock" wire:model='stock' class="block mt-1 w-full truncate" type="number" name="stock" :value="old('stock')" autocomplete="stock" />
                <x-input-error class="text-xs" for="stock"/>
            </div>
            <div class=" mt-5 w-full px-3 sm:w-1/2">
                <x-label class="text-white" for="price" value=" Precio" />
                <x-input id="price" wire:model='price' class="block mt-1 w-full truncate" type="text" name="price" :value="old('price')" autocomplete="price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                <x-input-error class="text-xs" for="price"/>
            </div>
            <div class="mt-5 w-full px-3 sm:w-1/2">
                <x-label class="text-white" for="entry_date" value="Fecha de Ingreso" />
                <x-input id="entry_date" wire:model='entry_date' class="block mt-1 w-full truncate" type="date" name="entry_date" :value="old('entry_date')" autocomplete="entry_date" />
                <x-input-error class="text-xs" for="entry_date"/>
            </div>
            <div class="mt-5 w-full px-3  sm:w-1/2">
                <x-label class="text-white" for="expiration_date" value="Fecha de Vencimiento" />
                <x-input id="expiration_date" wire:model='expiration_date' class="block mt-1 w-full truncate" type="date" name="expiration_date" :value="old('expiration_date')" autocomplete="expiration_date" />
                <x-input-error class="text-xs" for="expiration_date"/>
            </div>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="toggleModal()" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-success-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
            Editar
        </x-success-button>
    </x-slot>
</x-dialog-modal>
