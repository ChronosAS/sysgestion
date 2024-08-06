<div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-72 px-3">
                        <x-label for="document" value="Cedula de Identidad" />
                        <x-input id="document" wire:model='document' class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" autocomplete="document" />
                        <x-input-error for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="first_names" value="Nombres" />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="dob" value="Fecha de Nacimiento" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error for="dob"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="name" value="Rol" />
                        <x-select
                            name="role"
                            wire="live"
                            placeholder="Seleccionar"
                            :values="$roles"
                        />
                    </div>
                    <div class="mt-5  w-full px-3 sm:w-1/2">
                        <x-label for="email" value="Correo Electronico" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="password" value="{{ __('Password') }}" />
                            <div class="flex flex-col max-w-sm w-full">
                                <div class="relative" x-data="{ show: false }">
                                    <input class="mt-1 rounded bg-white block w-full border border-gray-300 py-2 px-3 focus:ring text-base" :type="show ? 'text' : 'password'" name="password" autocomplete="off" type="password" value="LookMaaGreatPassw0rd!">
                                    <div class="absolute top-4 right-4 cursor-pointer">
                                        <svg class="h-4 text-gray-700 block" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                        <svg class="h-4 text-gray-700 hidden" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                            <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        <x-input-error for="password"/>
                    </div>
                    <x-button class="ms-4 mt-5 mb-5 bg-blue-900">
                        Agregar
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>
