<x-dialog-modal wire:model.live="showEditRoleModal">
    <x-slot name="title" >
        <h1 class="text-center border-b">Crear Rol</h1>
    </x-slot>

    <x-slot name="content">
        <div class="mt-4 flex flex-col items-center">
            <x-input type="text" class="mt-1 block w-3/4  "
                        placeholder="Nombre de el rol"
                        wire:model="name"
                        wire:keydown.enter="save" />
            <x-input-error for="name" class="mt-2" />
        </div>
        <div class="grid grid-cols-2 gap-2 mt-2 mx-10">
            @foreach ($permissionsGrouped as $group => $permissions)
                <div>
                    <h1 class="text-lg font-bold">{{ $group }}</h1>
                    @foreach ($permissions as $permission)
                        <x-custom-checkbox name="permissions" value="{{ $permission['permission_id'] }}" title="{{ $permission['permission_name'] }}" id="{{ $permission['permission_fullname'] }}" />
                    @endforeach
                </div>
            @endforeach
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="toggleModal()" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-success-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
            Actualizar
        </x-success-button>
    </x-slot>
</x-dialog-modal>
