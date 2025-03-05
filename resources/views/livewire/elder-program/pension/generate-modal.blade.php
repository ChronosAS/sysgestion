<x-dialog-modal maxWidth='5xl'>
    <x-slot name="title" >
        <h1 class="text-center border-b border-white text-gray-900">Generar Reporte</h1>
    </x-slot>

    <x-slot name="content" >
        <div class="mt-4">
            <x-input-label for="payment_amount" :value="__('Monto de Pago')" />
            <x-text-input id="payment_amount" class="block mt-1 w-full" type="text" name="payment_amount" required autofocus />
            <x-input-error :messages="$errors->get('payment_amount')" class="mt-2" />
        </div>
    </x-slot>
</x-dialog-modal>
