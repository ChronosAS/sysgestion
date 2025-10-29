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
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="dop" value="F. de Elaboración " class="text-black" />
                        <x-input id="dop" class="block mt-1 w-full " type="date" name="dop"/>
                        <x-input-error class="text-xs" for="dop"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="permit_number" value="Número de Permiso" class="text-black" />
                        <x-input id="permit_number" placeholder="" class="block mt-1 w-full truncate text-center" type="text" name="permit_number" maxlength="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="permit_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="doe" value="F. de Vencimiento " class="text-black" />
                        <x-input id="doe" class="block mt-1 w-full " type="date" name="doe"/>
                        <x-input-error class="text-xs" for="doe"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="first_names" value="Nombre " class="text-black " />
                        <x-input id="first_names" class="block mt-1 w-full truncate" type="text" name="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="last_names" value="Apellido" class="text-black " />
                        <x-input id="last_names" class="block mt-1 w-full truncate" type="text" name="last_names"/>
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/5">
                        <x-label for="schedule" value="Horario" class="text-black " />
                        <x-input id="schedule" placeholder="" class="block mt-1 w-full truncate text-center" type="text" name="schedule"  />
                        <x-input-error class="text-xs" for="schedule"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="fiscal_registry" value="RIF" class="text-black" />
                        <x-input id="fiscal_registry" placeholder="e.j. 0123456789" class="block mt-1 w-full truncate text-center" type="text" name="fiscal_registry" maxlength="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="fiscal_registry"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black " />
                        <x-input id="phone_number" placeholder="" class="block mt-1 w-full truncate" type="text" name="phone_number"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="sector" value="Sector" class="text-black " />
                        <x-input id="sector" placeholder="" class="block mt-1 w-full truncate" type="text" name="sector"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="sector"/>
                    </div>
                    {{-- <div x-data="{
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
                    </div> --}}
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección de Habitación" class="text-black"/>
                        <x-input id="address" class="block mt-1 w-full truncate" type="text" name="address"/>
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="Area" value="Área Permisada" class="text-black"/>
                        <x-input id="Area" class="block mt-1 w-full truncate" type="text" name="Area"/>
                        <x-input-error class="text-xs" for="Area"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="event_observations" value="Observaciones del evento" class="text-black"/>
                        <x-input id="event_observations" class="block mt-1 w-full truncate" type="text" name="event_observations"/>
                        <x-input-error class="text-xs" for="event_observations"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="propaganda_observations" value="Observaciones de Publicidad y/o propaganda" class="text-black"/>
                        <x-input id="propaganda_observations" class="block mt-1 w-full truncate" type="text" name="propaganda_observations"/>
                        <x-input-error class="text-xs" for="propaganda_observations"/>
                    </div>
                    <div x-data="{modalIsOpen: false}" class="mt-5 w-full   sm:w-1/3">
                        <button x-on:click="modalIsOpen = true" type="button" class="whitespace-nowrap rounded-sm bg-black border border-black dark:border-white px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Descripción Del evento</button>
                        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                            <!-- Modal Dialog -->     
                            <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 -translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-sm border border-neutral-300  text-neutral-600 dark:border-neutral-700 bg-blue-800 dark:text-neutral-300">             
                                <!-- Dialog Header -->
                                <div class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20">
                                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">Descripción Del Evento</h3>
                                    <button x-on:click="modalIsOpen = false" aria-label="close modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Dialog Body -->
                                <div class=" mx-auto items-center justify-center gap-4 p-4 flex flex-row flex-wrap"> 
                                    <p>DEPORITVO:</p><x-checkbox id="sports" name="sports"  class=""/>
                                    <p>CULTURAL:</p><x-checkbox id="culture" name="culture"  class=""/>
                                    <p>BENÉFICO:</p><x-checkbox id="benefit" name="benefit"  class=""/>
                                    <p>EDUCATIVO:</p><x-checkbox id="education" name="education"  class=""/>
                                    <p>RELIGIOSO:</p><x-checkbox id="religion" name="religion"  class=""/>
                                    <p>OTROS:</p><x-checkbox id="other" name="other"  class=""/>
                                </div>
                                <!-- Dialog Footer -->
                                <div class="flex flex-col justify-between    bg-blue-900 p-4 sm:flex-row sm:items-center">
                                    <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-md bg-red-600  px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 active:opacity-100 active:outline-offset-0 ">Salir</button>
                                    <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-md bg-green-600 px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 active:opacity-100 active:outline-offset-0 ">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div x-data="{modalIsOpen: false}" class="mt-5 w-full   sm:w-1/3">
                        <button x-on:click="modalIsOpen = true" type="button" class="whitespace-nowrap rounded-sm bg-black border border-black dark:border-white px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Descripción de la Publicidad</button>
                        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                            <!-- Modal Dialog -->     
                            <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 -translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-sm border border-neutral-300  text-neutral-600 dark:border-neutral-700 bg-blue-800 dark:text-neutral-300">             
                                <!-- Dialog Header -->
                                <div class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20">
                                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">Descripción de la Publicidad</h3>
                                    <button x-on:click="modalIsOpen = false" aria-label="close modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Dialog Body -->
                                <div class=" mx-auto items-center justify-center gap-4 p-4 flex flex-row flex-wrap"> 
                                    <p>VOLANTES:</p><x-checkbox id="flyers" name="flyers"  class=""/>
                                    <p>AFICHES:</p><x-checkbox id="posters" name="posters"  class=""/>
                                    <p>PENDONES:</p><x-checkbox id="banner" name="banner"  class=""/>
                                    <p>HABLADORES:</p><x-checkbox id="showcases" name="showcases"  class=""/>
                                    <p>PANCARTAS:</p><x-checkbox id="banners" name="banners"  class=""/>
                                    <p>CALCOMANIAS:</p><x-checkbox id="stickers" name="stickers"  class=""/>
                                    <p class="px-4">BANDEROLAS O BANDERINES:</p><x-checkbox id="pennants" name="pennants"  class=""/>
                                    <p>STANDS:</p><x-checkbox id="stands" name="stands"  class=""/>
                                    <p>TOLDOS:</p><x-checkbox id="awnings" name="awnings"  class=""/>
                                    <p>INFLABLES:</p><x-checkbox id="inflatable" name="inflatable"  class=""/>
                                    <p>OTROS:</p><x-checkbox id="other" name="other"  class=""/>
                                </div>
                                <!-- Dialog Footer -->
                                <div class="flex flex-col justify-between    bg-blue-900 p-4 sm:flex-row sm:items-center">
                                    <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-md bg-red-600  px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 active:opacity-100 active:outline-offset-0 ">Salir</button>
                                    <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-md bg-green-600 px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 active:opacity-100 active:outline-offset-0 ">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    {{-- <div class=" mt-5 w-full px-3 sm:w-4/2 " >
                        <x-label  value="Permisos Adicionales" class="text-black" />
                        <x-table.table class="w-full ">
                            <x-slot name="thead">
                                <tr class="bg-blue-800 text-white ">
                                    <x-table.th class="pb-3 text-center" >
                                        <button class="inline-block cursor-pointer rounded-md bg-blue-900 hover:bg-blue-500 px-6 pb-2 pt-2.5 text-xs  uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">Agregar</button>
                                        
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 bg-white text-center text-black text-xl">
                                            No hay Permisos adicionales agregados.
                                        </td>
                                    </tr>
                            </x-slot>
                        </x-table.table>
                    </div>  --}}
                    <div class="mt-5  container-md  text-center  flex items-center justify-center flex-wrap w-full px-3  sm:w-1/2">
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
