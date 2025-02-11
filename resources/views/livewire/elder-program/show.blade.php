<div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800"></h2>
                <div>
                    <a href="{{ route('elder-program.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a href="{{ route('elder-program.edit', $official->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
                </div>
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Información del funcionario</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Cédula de identidad</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                     <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Fecha de nacimiento</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Correo electrónico</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Numero de Telefono</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Sexo</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Dirección</label>
                        <p class="mt-1 text-gray-900 text-sm"></p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <livewire:officials.beneficiaries.index :official="$official" /> --}}
    </div>
</div>
