<div x-data="{ officialIsRecipient: @entangle('official_is_recipient') }">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="applicant" value="Solicitante" class="text-black" />
                        <select wire:model.live='applicant' id="applicant" name="applicant" class="cursor-pointer rounded mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-center">
                            <option value="#" class="text-center">Seleccionar</option>
                            @foreach ($officials as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="applicant"/>
                        <label for="official_is_recipient" class="cursor-pointer">
                            <x-checkbox id="official_is_recipient" wire:model="official_is_recipient" class="text-black" x-model="officialIsRecipient"/>
                            Solicitante es el beneficiario
                        </label>
                    </div>
                    <div class="mt-5 pb-6 w-full px-3 sm:w-1/2" x-show="!officialIsRecipient">
                        <x-label for="recipient" value="Beneficiario" class="text-black" />
                        <select wire:model='recipient' id="recipient" name="recipient" class="cursor-pointer rounded mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-center">
                            <option value="#" class="text-center">Seleccionar</option>
                            @foreach ($recipients as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="recipient"/>
                    </div>
                    <div class="mt-5 w-full pb-6 px-3 sm:w-1/2">
                        <x-label for="application_date" value="Fecha de Solicitud" class="text-black" />
                        <x-input id="application_date" wire:model='application_date' class="block cursor-pointer mt-1 w-full " type="date" name="application_date" :value="old('application_date')" autocomplete="application_date" />
                        <x-input-error class="text-xs" for="application_date"/>
                    </div>
                    <div class="mt-5 w-full px-3">
                        <x-label for="files" value="Archivos" class="text-black" />
                        <x-input id="files" wire:model='files' class="block mt-1 p-2 bg-white cursor-pointer border border-blue-600 w-full" type="file" name="files[]" multiple />
                        <x-input-error class="text-xs" for="files"/>
                        <x-input-error class="text-xs" for="files.*"/>
                    </div>
                    <div class="mt-5 w-full px-3 ">
                        <x-label for="medicines[]" value="Medicamentos" class="text-black" />
                        <x-input-error class="text-xs" for="medicines"/>
                        <x-table.table>
                            <x-slot name="thead">
                                <tr class="bg-blue-800 text-white">
                                    <x-table.th class="pb-3 col-4">
                                        Medicamento(Composición/Presentación)
                                    </x-table.th>
                                    <x-table.th class="pb-3">
                                        Cantidad
                                    </x-table.th>
                                    <x-table.th class="col-2">
                                        <button type="button" class="inline-block bg-blue-900 hover:bg-blue-500 rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none" wire:click="addMedicine">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @foreach ($medicines as $index => $medicine)
                                    <tr class="bg-slate-300 shadow-md border border-blue-700 text-black">
                                        <x-table.td>
                                            <select wire:model='medicines.{{ $index }}.medicine_id' id="medicine" name="medicine" class="cursor-pointer rounded-l mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-center text-black">
                                                <option value="#" class="text-center">Seleccionar</option>
                                                @foreach ($medicinesList as $value => $name)
                                                    <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error class="text-xs" for="medicines.{{ $index }}.medicine_id"/>
                                        </x-table.td>
                                        <x-table.td>
                                            <x-input id="quantity" wire:model='medicines.{{ $index }}.quantity' class="block mt-1 w-full truncate text-black"  min="0" type="number" name="quantity" value="0" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                                            <x-input-error class="text-xs" for="medicines.{{ $index }}.quantity"/>
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <button wire:click="removeMedicine({{ $index }})" type="button" class="text-white bg-red-600 border border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center " style="border-radius: 50%" >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                            </x-slot>
                        </x-table.table>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('applications.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-green-600 hover:bg-green-500">
                            Agregar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
