<div x-data="{ health: false, requests: false, elderHelp: false, socialHelp: false }" class="relative">
    <nav x-data="{ open: false }" class="bg-blue-800 border-b border-blue-900 mb-16 relative">
        <!-- Primary Navigation Menu -->
        <div x-show="health"
            x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 -translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-0"
            class="absolute w-full top-16 left-0 right-0  mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-blue-700 shadow"
        >
            {{-- <h2 class="font-semibold text-xl text-white leading-tight">
                {!! $header !!}
            </h2> --}}
            <x-nav.health/>
        </div>
        <div x-show="requests"
            x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 -translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-0"
            class="absolute w-full top-16 left-0 right-0  mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-blue-700 shadow"
        >
            {{-- <h2 class="font-semibold text-xl text-white leading-tight">
                {!! $header !!}
            </h2> --}}
            <x-nav.requests/>
        </div>
        <div x-show="elderHelp"
            x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 -translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-0"
            class="absolute w-full top-16 left-0 right-0  mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-blue-700 shadow"
        >
            {{-- <h2 class="font-semibold text-xl text-white leading-tight">
                {!! $header !!}
            </h2> --}}
            <x-nav.elder-help/>
        </div>
        <div x-show="socialHelp"
            x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 -translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-0"
            class="absolute w-full top-16 left-0 right-0  mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-blue-700 shadow"
        >
            {{-- <h2 class="font-semibold text-xl text-white leading-tight">
                {!! $header !!}
            </h2> --}}
            <x-nav.social-help/>
        </div>
        
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center relative ">
                        <a href="{{ route('dashboard') }}">
                            <x-application-mark class="block h-12 w-auto px-2" />
                        </a>
                    </div>
                    

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link class="cursor-pointer hover:text-gray-300 dark:hover:text-gray-300 focus:text-blue-500" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <x-logos.inicio />
                        </x-nav-link>
                        <x-nav-link @click=" health = false;  socialHelp = false; requests = false; elderHelp = !elderHelp" class="cursor-pointer hover:text-gray-300 dark:hover:text-gray-300 focus:text-blue-500"  >
                            <x-logos.abuelos />
                        </x-nav-link>
                        <x-nav-link @click=" elderHelp = false; socialHelp = false; requests = false; health = !health" class="cursor-pointer hover:text-gray-300 dark:hover:text-gray-300 focus:text-blue-500" >
                            <x-logos.dona-salud />
                        </x-nav-link>
                        <x-nav-link @click=" health = false; requests = false; elderHelp = false; socialHelp = !socialHelp" class=" cursor-pointer hover:text-gray-300 dark:hover:text-gray-300 focus:text-blue-500"  >
                            <x-logos.social-help/>
                        </x-nav-link>
                        <x-nav-link @click=" health = false; elderHelp = false; socialHelp = false; requests = !requests"  class="cursor-pointer hover:text-gray-300 dark:hover:text-gray-300 focus:text-blue-500"  >
                            <x-logos.solicitudes />
                        </x-nav-link>
                    </div>
                    @role('admin')
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Dropdown -->
                            <div class="ms-3 relative hidden">
                                <x-dropdown contentClasses="py-1 bg-blue-800" align="left" width="60">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:text-gray-400 focus:outline-none focus:bg-blue-700 active:bg-blue-700 transition ease-in-out duration-150">
                                                Registro
                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <div class="w-60">
                                            {{-- <!-- Extra Tables -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Extra Tables') }}
                                            </div> --}}
                                            <!-- Users -->
                                            <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('users.administration') }}">
                                                Administracion de Usuarios
                                            </x-dropdown-link>

                                            <!-- Medicine -->
                                            <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('medicines.index') }}">
                                                Medicamentos
                                            </x-dropdown-link>
                                            <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('officials.index') }}">
                                                Beneficiarios
                                            </x-dropdown-link>
                                            <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('applications.index') }}">
                                                Solicitudes
                                            </x-dropdown-link>
                                        </div>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    @endrole
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">

                    <!-- Settings Dropdown -->
                    <div class="ms-3 relative">
                        <x-dropdown contentClasses="py-1 bg-blue-800" align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:text-gray-400 focus:outline-none focus:bg-blue-700 active:bg-blue-700 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('users.administration') }}">
                                    Administracion de Usuarios
                                </x-dropdown-link>
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-white">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link class="hover:bg-blue-600 text-white hover:text-gray-200" href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link class="hover:bg-blue-600 dark:hover:bg-blue-600  text-white hover:text-gray-200" href="{{ route('logout') }}"
                                             @click.prevent="$root.submit();">
                                        {{ __('Logout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 me-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        <!-- Team Switcher -->
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
