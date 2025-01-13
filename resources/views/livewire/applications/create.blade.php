<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full px-3">
                        <x-label for="code" value="Codigo" class="text-black" />
                        <x-input id="code" wire:model='code' class="block mt-1 w-full truncate" type="text" name="code" :value="old('code')" autocomplete="code"/>
                        <x-input-error class="text-xs" for="code"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="applicant" value="Solicitante" class="text-black" />
                        <select wire:model.live='applicant' id="applicant" name="applicant" class="cursor-pointer rounded-l mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                            <option value="#" class="text-center">Seleccionar</option>
                            @foreach ($officials as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="applicant"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="recipient" value="Beneficiario" class="text-black" />
                        <select wire:model='recipient' id="recipient" name="recipient" class="cursor-pointer rounded-l mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-center">
                            <option value="#" class="text-center">Seleccionar</option>
                            @foreach ($recipients as $value => $name)
                                <option value="{{ $value }}" class="text-center">{{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="text-xs" for="recipient"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="request_date" value="Fecha de Solicitud" class="text-black" />
                        <x-input id="request_date" wire:model='request_date' class="block cursor-pointer mt-1 w-full " type="date" name="request_date" :value="old('request_date')" autocomplete="request_date" />
                        <x-input-error class="text-xs" for="request_date"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="delivery_date" value="Fecha de Entrega" class="text-black" />
                        <x-input id="delivery_date" wire:model='delivery_date' class="block cursor-pointer mt-1 w-full " type="date" name="delivery_date" :value="old('delivery_date')" autocomplete="delivery_date" />
                        <x-input-error class="text-xs" for="delivery_date"/>
                    </div>
                    <div class="mt-5 w-full px-3">
                        <x-label for="files" value="Archivos" class="text-black" />
                        <x-input id="files" wire:model='files[]' class="block mt-1 p-2 bg-white cursor-pointer border border-blue-600 w-full" type="file" name="files[]" multiple />
                        <x-input-error class="text-xs" for="files"/>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('applications.index') }}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
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
