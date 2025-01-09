<x-dialog-modal maxWidth='2xl' wire:model.live="showAddBeneficiaryModal">
    <x-slot name="title" >
        <h1 class="text-center border-b">Agregar beneficiario</h1>
    </x-slot>

    <x-slot name="content">

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
