<div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center ">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap mb-4">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Hoja De Servicio</p>
                    </div>
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="date" value="Fecha" class="text-black text-md font-black " />
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
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label for="full_name" value="Nombre" class="text-black text-md font-black " />
                        <div>
                            <x-input id="full_name" wire:model='full_name' class="block mt-1 w-full truncate" type="text" name="full_name"/>
                            <x-input-error class="text-xs" for="full_name"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label value="Departamento" class="text-black text-md font-black " />
                        <div>
                           <x-input id="department" wire:model='department' class="block mt-1 w-full truncate" type="text" name="department"/>
                            <x-input-error class="text-xs" for="department"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label  value="Dirección" class="text-black text-md font-black " />
                        <div>
                            <x-input id="address"  class="block mt-1 w-full truncate" type="text" name="address"/>
                            <x-input-error class="text-xs" for="address"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                    <x-label for="computer_user" value="Usuario" class="text-black text-md font-black " />
                        <div>
                            <x-input id="computer_user"  class="block mt-1 w-full truncate" type="text" name="computer_user"/>
                            <x-input-error class="text-xs" for="computer_user"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full px-3 ">
                        <x-label for="equipment_characteristics" value="Caracteristicas del equipo" class="text-black text-md font-black " />
                        <div>
                            <x-input id="equipment_characteristics" wire:model='equipment_characteristics' class="block mt-1 w-full truncate" type="text" name="equipment_characteristics"/>
                            <x-input-error class="text-xs" for="equipment_characteristics"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center my-6">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class=" mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="service_type" value="Tipo de Servicio" class="text-black text-md   font-black text-xl mt-6" />
                        <div class=" mx-auto items-left justify-left grid grid-cols-2 gap-4 p-4 "> 
                            <p class="text-left font-black">MANTENIMIENTO DE IMPRESORA:<x-checkbox id="printer_maintenance" name="printer_maintenance"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">MANTENIMIENTO DE SISTEMAS:<x-checkbox id="system_maintenance" name="system_maintenance"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">FORMATEO DE EQUIPOS:<x-checkbox id="formatting_computers" name="formatting_computers"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">MANTENIMIENTO PREVENTIVO Y/O CORRECTIVO:<x-checkbox id="maintenance" name="maintenance"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">INSTALACIÓN Y ACTUALIZACIÓN DE SOFTWARE:<x-checkbox id="installation_update" name="installation_update"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">DISEÑO DE SISTEMAS:<x-checkbox id="systems_design" name="systems_design"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">INSTALACIÓN Y/O CONFIGURACIÓN DE IMPRESORAS:<x-checkbox id="installation_configuration" name="installation_configuration"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">INST. DE DISPOSITIVO INTERNOS DEL C.P.U:<x-checkbox id="internal_devices" name="internal_devices"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">CREACIÓN DE REPORTES:<x-checkbox id="report_creation" name="report_creation"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">CONF. DEL SISTEMA OPERATIVO:<x-checkbox id="op_config" name="op_config"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">RESPALDO DE INFORMACIÓN:<x-checkbox id="backup_information" name="backup_information"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">CONFIGURACIÓN DE RED<x-checkbox id="network_config" name="network_config"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">ADMINISTRACIÓN BASE DE DATOS:<x-checkbox id="db_administration" name="db_administration"  class=" pointer-auto cursor-pointer"/></p>
                            <p class="text-left font-black">OTROS:<x-checkbox id="other" name="other"  class=" pointer-auto cursor-pointer"/></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center my-6">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class=" mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="service_performed" value="Descripcion del serivicio efectuado" class="text-black text-md font-black " />
                        <div>
                            <x-input id="service_performed" wire:model='service_performed' class="block mt-1 w-full truncate" type="text" name="service_performed"/>
                            <x-input-error class="text-xs" for="service_performed"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="technical_suggestions" value="Sugerencias Técnicas" class="text-black text-md font-black " />
                        <div>
                            <x-input id="technical_suggestions" wire:model='technical_suggestions' class="block mt-1 w-full truncate" type="text" name="technical_suggestions"/>
                            <x-input-error class="text-xs" for="technical_suggestions"/>
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
