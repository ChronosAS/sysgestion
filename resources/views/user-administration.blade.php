<x-app-layout>
    <x-slot name="header">
        Administracion de Usuarios
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can('user:access')
                @livewire('users.index')
            @endcan
            @can('role:access')
                @livewire('roles-and-permissions.index')
            @endcan
        </div>
    </div>
</x-app-layout>
