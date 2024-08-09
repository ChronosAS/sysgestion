<x-dialog-modal wire:model.live="showCreateRoleModal">
    <x-slot name="title">
        Crear Rol
    </x-slot>

    <x-slot name="content">
        <div class="mt-4">
            <x-input type="text" class="mt-1 block w-3/4"
                        placeholder="Nombre de el rol"
                        wire:model="name"
                        wire:keydown.enter="save" />

            <x-input-error for="name" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('showCreateRoleModal')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-success-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
            Crear
        </x-success-button>
    </x-slot>
</x-dialog-modal>
