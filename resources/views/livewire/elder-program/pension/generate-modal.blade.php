<div x-data="{ isGenerated: @entangle('isGenerated') }">
    <x-dialog-modal maxWidth='md' wire:model.live='generateModalOpen'>
        <x-slot name="title" >
            <h1 class="text-center border-b border-white text-gray-900">Generar Reporte</h1>
        </x-slot>

        <x-slot name="content" >
            <form wire:submit.prevent='save' wire:keydown.enter.prevent class="mt-5 mx-10 container-md text-center flex items-center justify-center flex-wrap">
                <div class="mt-4">
                    <x-label for="amount" :value="__('Monto de Pago')" />
                    <x-input id="amount" wire:model='amount' type="text" name="amount"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').replace(/^(\d{10})\d+(\.\d{0,2})?$/, '$1$2');" />
                    <x-input-error for="amount" class="mt-2" />
                    <x-input-error for="total_elders" class="mt-2" />
                </div>
                <div x-show="isGenerated">
                    <div class="mt-4">
                        <x-label for="total_elders" value="Numero de abuelos" />
                        {{ $total_elders }}
                    </div>
                    <div class="mt-4">
                        <x-label for="total_elders" value="Monto Total"  />
                        {{ $total }}Bs
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="toggleModal()" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-success-button class="ms-3" wire:click="generate" wire:loading.attr="disabled">
                Generar
            </x-success-button>

            <x-success-button x-show="isGenerated" class="ms-3" wire:click="save" wire:loading.attr="disabled">
                Aprobar
            </x-success-button>
        </x-slot>
    </x-dialog-modal>
</div>
