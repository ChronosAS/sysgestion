<div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-72 px-3">
                        <x-label for="document" value="Cedula de Identidad" />
                        <x-input id="document" class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" required autocomplete="document" />
                        <x-input-error for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="first_names" value="Nombres" />
                        <x-input id="first_names" class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" required autocomplete="first_names" />
                        <x-input-error for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" />
                        <x-input id="last_names" class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" required autocomplete="last_names" />
                        <x-input-error for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="dob" value="Fecha de Nacimiento" />
                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autocomplete="dob" />
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
                    <div class="mt-5  w-full sm:w-72 px-3">
                        <x-label for="email" value="Correo Electronico" />
                        <x-input id="email" class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error for="email"/>
                    </div>
                    <div class="mt-5 mb-5 w-full px-3 sm:w-1/2">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
                        <x-input-error for="password"/>
                    </div>

                    <div class="mt-5 mb-5 w-full px-3 sm:w-1/2">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required/>
                        <x-input-error for="password_confirmation"/>
                    </div>
                    <x-button class="ms-4  mb-5 bg-blue-900">
                        Agregar
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>
