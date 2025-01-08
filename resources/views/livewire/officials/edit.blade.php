<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-1/2 px-3">
                        <x-label for="document" value="Cedula de Identidad" />
                        <x-input id="document" wire:model='document' class="block mt-1 w-full truncate" type="text" name="document" :value="old('document')" autocomplete="document" />
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="first_names" value="Nombres" />
                        <x-input id="first_names" wire:model='first_names' class="block mt-1 w-full truncate" type="text" name="first_names" :value="old('first_names')" autocomplete="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="dob" value="Fecha de Nacimiento" />
                        <x-input id="dob" wire:model='dob' class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" autocomplete="dob" />
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="email" value="Correo Electronico" />
                        <x-input id="email" wire:model='email' class="block mt-1 w-full truncate" type="text" name="email" :value="old('email')" autocomplete="email" />
                        <x-input-error class="text-xs" for="email"/>

                    </div>
                    <div class="mt-5  w-full px-3 sm:w-1/2">
                        <x-label for="phone" value="Teléfono" />
                        <x-input id="phone" wire:model='phone' class="block mt-1 w-full truncate" type="number" name="phone" :value="old('phone')" autocomplete="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                        <x-input-error class="text-xs" for="phone"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4" >
                        <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
                        <select id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                            <option value="choose" class="text-center">Seleccionar</option>
                            <option value="male" class="text-center">Masculino</option>
                            <option value="female" class="text-center">Femenino</option>
                        </select>
                    
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/4">
                        <x-label for="address" value="Dirección" />
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="col-span-6">
                        {{-- <div class="col">
                            <label for="images"><h5>Imagenes</h5></label>
                            <input class="form-control" wire:model="images" type="file" id="images" multiple />
                            @error('images.*')
                                <span class="text-danger"><b>{{ $message }}</b></span>
                            @enderror
                        </div> --}}
                        <x-table.table>
                            <x-slot name="thead">
                                <tr class="bg-blue-900 text-white">
                                    <x-table.th class="pb-3 text-center">
                                        Cédula
                                    </x-table.th>
                                    <x-table.th class="pb-3">
                                        Nombre
                                    </x-table.th>
                                    <x-table.th class="pb-3">
                                        Apellido
                                    </x-table.th>
                                    <x-table.th class="col-2">
                                        <button type="button" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none" wire:click="addImage">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                {{-- @foreach ($images as $index => $image)
                                    <tr class="bg-slate-300 shadow-md border border-gray-700">
                                        <x-table.td>
                                            <label for="images.{{ $index }}.image" class="text-white bg-black px-[6px] py-[6px] rounded-md shadow-sm inline-block sm:hidden cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg>
                                            </label>
                                            <input class="mt-1 hidden sm:block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm" wire:model="images.{{ $index }}.image" type="file" id="images.{{ $index }}.image">
                                            @error('images.*.image')
                                                <span class="text-danger"><b>{{ $message }}</b></span>
                                            @enderror
                                            @error('images.*.name')
                                                <span class="text-danger"><b>{{ $message }}</b></span>
                                            @enderror
                                        </x-table.td>
                                        <x-table.td>
                                            <input class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm"
                                            wire:model="images.{{ $index }}.description" type="text" id="images.{{ $index }}.description" name="images.{{ $index }}.description" placeholder="Ingresar...">
                                            @error('images.*.description')
                                                <span class="text-danger"><b>{{ $message }}</b></span>
                                            @enderror
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <button wire:click="removeImage({{ $index }})" type="button" class="text-white bg-red-600 border border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center " style="border-radius: 50%" >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                                @error('images')
                                    <tr><x-table.td colspan="3"><span class="text-danger"><b>{{ $message }}</b></span></x-table.td></tr>
                                @enderror --}}
                            </x-slot>
                        </x-table.table>
                    </div>
                <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <x-button-href href="{{ route('officials.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                        Regresar
                    </x-button-href>
                    <x-button class="ms-4 mt-5 mb-5 bg-blue-900">
                        Agregar
                    </x-button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>