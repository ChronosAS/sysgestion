<div x-data="{
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
</div>  