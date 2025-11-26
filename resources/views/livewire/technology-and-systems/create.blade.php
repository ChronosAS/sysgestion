<div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center ">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap mb-4">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Entrada de Equipo</p>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3">
                        <x-label for="date" value="Fecha De Entrada" class="text-black text-md font-black " />
                        <div>
                            <p class="text-md font-black text-black">{{ now()->format('d/m/Y') }}</p>
                            <x-input-error class="text-xs" for="date"/>
                        </div>
                    </div>
                    {{-- <div x-data="{
                            startHour: '', 
                            startMinute: '', 
                            startPeriod: 'AM',
                            endHour: '', 
                            endMinute: '', 
                            endPeriod: 'AM'
                        }" class="flex space-x-28 justify-center w-full px-3 sm:w-3/1">
                    
                        <!-- Hora de Inicio -->
                        <div class="mt-5 w-full px-3 sm:w-1/5 flex flex-col">
                            <x-label for="start_time" value="Hora de Inicio" class="text-black text-md font-black" />
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
                            <x-label for="end_time" value="Hora de Finalizacion" class="text-black text-md font-black" />
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
                    </div>  --}}
                    <div class="mt-5  w-full sm:w-1/2 px-3 ">
                        <x-label value="Dirección o Departamento" class="text-black text-md font-black " />
                        <div>
                           <x-input id="department" wire:model='department' class="block mt-1 w-full truncate" type="text" name="department"/>
                            <x-input-error class="text-xs" for="department"/>
                        </div>
                    </div>

                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                    <x-label for="amount" value="Cantidad" class="text-black text-md font-black " />
                        <div>
                            <x-input id="amount"  class="block mt-1 w-full truncate" type="text" name="amount"/>
                            <x-input-error class="text-xs" for="amount"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full px-3 ">
                        <x-label for="computer_description" value="Descripcion del equipo" class="text-black text-md font-black " />
                        <div>
                            <x-input id="computer_description" wire:model='computer_description' class="block mt-1 w-full truncate" type="text" name="computer_description"/>
                            <x-input-error class="text-xs" for="computer_description"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center my-6">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class=" mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="failures" value="Fallas" class="text-black text-md font-black " />
                        <div>
                            <x-input id="failures" wire:model='failures' class="block mt-1 w-full truncate" type="text" name="failures"/>
                            <x-input-error class="text-xs" for="failures"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="technical_observations" value="Observaciones" class="text-black text-md font-black " />
                        <div>
                            <x-input id="technical_observations" wire:model='technical_observations' class="block mt-1 w-full truncate" type="text" name="technical_observations"/>
                            <x-input-error class="text-xs" for="technical_observations"/>
                        </div>
                    </div>
                
                    
                    <div class="mt-5  container-md  text-center  flex items-center justify-center flex-wrap w-full px-3  sm:w-1/2">
                        <x-button-href href="{{ route('technology-and-systems.index')}}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
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
