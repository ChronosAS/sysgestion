<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label class="text-white" for="email" value="Correo electrónico" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label class="text-white" for="password" value="Contraseña" />
                <x-input id="password" class="block mt-1 w-full " type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="text-white cursor-pointer" for="remember_me" class="flex items-center">
                    <x-checkbox class="cursor-pointer" id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-white">Recuerdame</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        Olvido su contraseña?
                    </a>
                @endif

                <x-button class="text-white bg-blue-600 ms-4">
                    Iniciar sesion
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
