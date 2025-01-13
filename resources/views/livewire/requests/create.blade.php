<div>
    <div class="py-12" x-data="{ beneficiaries: @entangle('beneficiaries') }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-blue-700 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full sm:w-1/2 px-3">
                        <x-label for="code" value="Codigo" class="text-white" />
                        <x-input id="code" wire:model='code' class="block mt-1 w-full truncate" type="text" name="code" :value="old('code')" autocomplete="code" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="code"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        {{-- <x-label for="applicant_id" value="ID" class="text-white" />
                        <x-input id="applicant_id" wire:model='applicant_id' class="block mt-1 w-full truncate" type="text" name="applicant_id" :value="old('applicant_id')" autocomplete="applicant_id" />
                        <x-input-error class="text-xs" for="applicant_id"/> --}}
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="last_names" value="Apellidos" class="text-white" />
                        <x-input id="last_names" wire:model='last_names' class="block mt-1 w-full truncate" type="text" name="last_names" :value="old('last_names')" autocomplete="last_names" />
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="request_date" value="Fecha de Solicitud" class="text-white" />
                        <x-input id="request_date" wire:model='request_date' class="block mt-1 w-full " type="date" name="request_date" :value="old('request_date')" autocomplete="request_date" />
                        <x-input-error class="text-xs" for="request_date"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="delivery_date" value="Fecha de Entrega" class="text-white" />
                        <x-input id="delivery_date" wire:model='delivery_date' class="block mt-1 w-full " type="date" name="delivery_date" :value="old('delivery_date')" autocomplete="delivery_date" />
                        <x-input-error class="text-xs" for="delivery_date"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="phone_number" value="Teléfono" class="text-white" />
                        <x-input id="phone_number" wire:model='phone_number' class="block mt-1 w-full truncate" type="text" name="phone_number" :value="old('phone_number')" autocomplete="phone_number" oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');" />
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4" >
                        <label for="applicant_id" class="block text-sm font-medium text-white">Género</label>
                        <select wire:model='applicant_id' id="applicant_id" name="applicant_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center ">Seleccionar</option>
                            @foreach ($applicant_id as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="applicant_id"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/4">
                        <x-label for="address" value="Dirección" class="text-white"/>
                        <x-input id="address" wire:model='address' class="block mt-1 w-full truncate" type="text" name="address" :value="old('address')" autocomplete="address" />
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-4/4">
                        <x-table.table class="w-full">
                            <x-slot name="thead">
                                <tr class="bg-blue-800 text-white ">
                                    <x-table.th class="pb-3 text-center">
                                        Cédula
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Nombre/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Apellido/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        <button @click="$dispatch('addBeneficiaryModal',{ beneficiaries })" type="button" class="inline-block cursor-pointer rounded-md bg-blue-900 hover:bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @forelse($beneficiaries as $index => $beneficiary)
                                    <tr class="bg-white shadow-md border border-gray-700 text-center">
                                        <td class="text-black">
                                           
                                        </td>
                                        <td class="text-black">
                                
                                        </td>
                                        <td class="text-black">
                                    
                                       </td>
                                        <x-table.td class="text-center">
                                            {{-- <a @click="$dispatch('editBeneficiaryModal', { index: {{ $index }}, beneficiaries })" class="font-bold text-blue-500 cursor-pointer hover:underline">Editar</a>
                                            <a wire:confirm='seguro que desea remover este beneficiario?' wire:click="removeBeneficiary({{ $index }})" class="font-bold text-red-500 cursor-pointer hover:underline">Remover</a> --}}
                                        </x-table.td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 bg-white text-center text-black text-xl">
                                            No hay beneficiarios agregados
                                        </td>
                                    </tr>
                                @endforelse
                            </x-slot>
                        </x-table.table>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('requests.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-blue-900 hover:bg-blue-500">
                            Agregar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>