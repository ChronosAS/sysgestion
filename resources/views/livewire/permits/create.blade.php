<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Registro de Permisos</p>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label for="document" value="Cédula de Identidad " class="text-black " />
                        <div class="flex items-center">
                            <x-input id="document" placeholder="e.j. 01234567" class="text-center block mt-1 w-full truncate rounded-none rounded-l-md disabled:text-slate-400" type="text" name="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                            <button class="p-[9px] mt-1 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-none rounded-r-md" type="button"">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            {{-- <button class="p-[9px] mt-1 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-none rounded-r-md" type="button"">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button> --}}
                        </div>
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="first_names" value="Nombre del Responsable" class="text-black " />
                        <x-input id="first_names" class="block mt-1 w-full truncate" type="text" name="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="last_names" value="Apellido del Reponsable" class="text-black " />
                        <x-input id="last_names" class="block mt-1 w-full truncate" type="text" name="last_names"/>
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="email" value="Correo Electrónico" class="text-black " />
                        <x-input id="email" placeholder="e.j. correo@electronico.com" class="block mt-1 w-full truncate text-center" type="text" name="email"  />
                        <x-input-error class="text-xs" for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black " />
                        <x-input id="phone_number" placeholder="" class="block mt-1 w-full truncate" type="text" name="phone_number"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number_2" value="Teléfono 2" class="text-black " />
                        <x-input id="phone_number_2" placeholder="" class="block mt-1 w-full truncate" type="text" name="phone_number_2"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="phone_number_2"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="doe" value="Fecha del evento" class="text-black" />
                        <x-input id="doe" class="block mt-1 w-full " type="date" name="doe"/>
                        <x-input-error class="text-xs" for="doe"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="fiscal_registry" value="RIF" class="text-black" />
                        <x-input id="fiscal_registry" placeholder="e.j. 0123456789" class="block mt-1 w-full truncate text-center" type="text" name="fiscal_registry" maxlength="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="fiscal_registry"/>
                    </div>
                    <div x-data="{
                            startHour: '', 
                            startMinute: '', 
                            startPeriod: 'AM',
                            endHour: '', 
                            endMinute: '', 
                            endPeriod: 'AM'
                        }" class="flex space-x-28 justify-center w-full">
                    
                        <!-- Hora de Inicio -->
                        <div class="mt-5 w-full px-3 sm:w-1/5 flex flex-col">
                            <x-label for="start_time" value="Hora de Inicio" class="text-black" />
                            <div class="flex items-center">
                                <input type="number" min="1" max="12" x-model="startHour" placeholder="hh" class="block mt-1 w-16 text-center rounded" />
                                <span class="mx-1">:</span>
                                <input type="number" min="0" max="59" x-model="startMinute" placeholder="mm" class="block mt-1 w-16 text-center rounded" />
                                <select x-model="startPeriod" class="block mt-1 ms-2 rounded">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </div>
                            <!-- Campo oculto para enviar el valor combinado -->
                            <input type="hidden" name="start_time" :value="(startHour ? startHour.padStart(2, '0') : '') + ':' + (startMinute ? startMinute.padStart(2, '0') : '00') + ' ' + startPeriod">
                            <x-input-error class="text-xs" for="start_time"/>
                        </div>
    
                        <!-- Hora de Conclusión -->
                        <div class="mt-5 w-full px-3 sm:w-1/5 flex flex-col">
                            <x-label for="end_time" value="Hora de Conclusión" class="text-black" />
                            <div class="flex items-center">
                                <input type="number" min="1" max="12" x-model="endHour" placeholder="hh" class="block mt-1 w-16 text-center rounded" />
                                <span class="mx-1">:</span>
                                <input type="number" min="0" max="59" x-model="endMinute" placeholder="mm" class="block mt-1 w-16 text-center rounded" />
                                <select x-model="endPeriod" class="block mt-1 ms-2 rounded">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </div>
                            <!-- Campo oculto para enviar el valor combinado -->
                            <input type="hidden" name="end_time" :value="(endHour ? endHour.padStart(2, '0') : '') + ':' + (endMinute ? endMinute.padStart(2, '0') : '00') + ' ' + endPeriod">
                            <x-input-error class="text-xs" for="end_time"/>
                        </div>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección del Evento" class="text-black"/>
                        <x-input id="address" class="block mt-1 w-full truncate" type="text" name="address"/>
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('medicines.medicine-applications.index')}}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-green-600 hover:bg-green-500">
                            Registrar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
