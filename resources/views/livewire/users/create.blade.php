<div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <form class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <div class="mt-5 w-full  px-3">
                            <x-label for="name" value="{{ __('Cedula de Identidad') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="Cedula de Identidad" :value="old('name')" required autofocus autocomplete="Cedula de Identidad" />
                        </div>
                        <div class="mt-5 w-full px-3 sm:w-1/2">
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="Nombre" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mt-5 w-full px-3 sm:w-1/2">
                            <x-label for="name" value="{{ __('Apellido') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="Apellido" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mt-5 w-full px-3 sm:w-1/2">
                            <x-label for="name" value="{{ __('Fecha de Nacimiento') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="date" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class=" mt-5  px-3 sm:w-1/2">
                        <x-label for="name" value="{{ __('Rol') }}" />
                            <x-select
                                name="role"
                                wire="live"
                                placeholder="Estado"
                                :values="$roles"
                            />
                        </div>
                        <div class="mt-5 w-full px-3">
                            <x-label for="name" value="{{ __('Correo Electronico') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mt-5 mb-5 w-full px-3 sm:w-1/2">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-5 mb-5 w-full px-3 sm:w-1/2">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <x-button class="ms-4  mb-5 bg-blue-900">
                           Agregar
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
