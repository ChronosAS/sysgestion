<div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden mt-3 shadow-xl sm:rounded-lg col-span-3 ">
        <div class="p-6 lg:p-8 bg-white border-t border-gray-200">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <h1 class="border-b-2 border-black text-2xl ml-5">Información del Usuario</h1>
                <div class="mt-5  mx-10 container-xl  text-center  flex  justify-between flex-wrap">
                    <div class="mt-5 px-8 ml-5 w-60 text-center">
                        <x-label for="document" class="border-b border-black" value="Cédula de Identidad" />
                        <div class="max-w-72 break-all">{{ $user->document }}</div>
                    </div>
                    <div class="mt-5 px-8 ml-5 w-60 text-center">
                        <x-label for="email" class="border-b border-black" value="Correo Electrónico" />
                        <div class="max-w-72 break-all">{{ $user->email }}</div>
                    </div>
                    <div class="mt-5 px-8 ml-5 w-60 text-center">
                        <x-label for="status" class="border-b border-black" value="Estado"/>
                        @if($user->status == 1)
                            <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                <span class="flex  items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Activo</span>
                            </a>
                        @else
                            <a class="cursor-pointer" wire:click='toggleStatus({{ $user->id }})'>
                                <span class="flex items-center text-sm font-medium text-gray-900  me-3"><span class="flex w-2.5 h-2.5 bg-red-600 rounded-full me-1.5 flex-shrink-0"></span>Inactivo</span>
                            </a>
                        @endif
                    </div>
                    <div class="mt-5 px-8 ml-5 w-60 text-center">
                        <x-label for="dob" class="border-b border-black" value="Fecha de Nacimiento" />
                        {{ $user->dob }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden mt-3 shadow-xl sm:rounded-lg col-start-4 max-w-md">
        <div class="p-6 lg:p-8 bg-white border-t border-gray-200">
            <div class="relative overflow-x-auto  sm:rounded-lg">
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden my-3 shadow-xl sm:rounded-lg col-span-4">
        <livewire:users.activity-log.index :user="$user">
    </div>
</div>
