<div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center ">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="mt-5 container-md text-center flex items-center justify-center flex-wrap mb-4">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Entrada de Equipo</p>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-[63rem] sm:px-6 lg:px-8  justify-self-center my-6">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="container-md text-center flex items-center justify-center flex-wrap mb-4">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Caracteristicas del equipo</p>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3">
                        <x-label for="date" value="Fecha De Entrada" class="text-black text-md font-black " />
                        <div>
                            <x-input id="date" wire:model='date' class="block mt-1 w-full truncate" type="date" name="date"/>
                            {{-- <p class="text-md font-black text-black">{{ now()->format('d/m/Y') }}</p> --}}
                            <x-input-error class="text-xs" for="date"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full sm:w-1/3 px-3 ">
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
                    <div class="mt-5  w-full  px-3 sm:w-1/3 ">
                        <x-label for="serial_number" value="Numero Serial" class="text-black text-md font-black " />
                        <div>
                            <x-input id="serial_number" wire:model='serial_number' class="block mt-1 w-full truncate" type="text" name="serial_number"/>
                            <x-input-error class="text-xs" for="serial_number"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full  px-3 sm:w-1/4">
                        <x-label for="computer_model" value="Modelo Del equipo" class="text-black text-md font-black " />
                        <div>
                            <x-input id="computer_model" wire:model='computer_model' class="block mt-1 w-full truncate" type="text" name="computer_model"/>
                            <x-input-error class="text-xs" for="computer_model"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full px-3 sm:w-1/4 ">
                        <x-label for="computer_type" value="Tipo de equipo" class="text-black text-md font-black " />
                        <div>
                            <x-input id="computer_type" wire:model='computer_type' class="block mt-1 w-full truncate" type="text" name="computer_type"/>
                            <x-input-error class="text-xs" for="computer_type"/>
                        </div>
                    </div>
                    {{-- <div class="mt-5  w-full px-3 sm:w-1/4">
                        <x-label for="computer_state" value="Estado del equipo" class="text-black text-md font-black " />
                        <div>
                            <x-input id="computer_state" wire:model='computer_state' class="block mt-1 w-full truncate" type="text" name="computer_state"/>
                            <x-input-error class="text-xs" for="computer_state"/>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center my-6">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit='save' class="container-md text-center flex items-center justify-center flex-wrap mb-4">
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="failures" value="Fallas" class="text-black text-md font-black " />
                        <div>
                            <x-input id="failures" wire:model='failures' class="block mt-1 w-full truncate" type="text" name="failures"/>
                            <x-input-error class="text-xs" for="failures"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="technical_description" value="Descripcion" class="text-black text-md font-black " />
                        <div>
                            <x-input id="technical_description" wire:model='technical_description' class="block mt-1 w-full truncate" type="text" name="technical_description"/>
                            <x-input-error class="text-xs" for="technical_description"/>
                        </div>
                    </div>
                    <div class="mt-5  w-full  px-3 ">
                        <x-label for="technical_suggestions" value="Sugerencias" class="text-black text-md font-black " />
                        <div>
                             <textarea   class="mt-2 w-full h-28 resize-none border-gray-400 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm "></textarea>
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
