@props(
    [
        'name' => null,
        'options' => $options,
        'label' => null,
    ]
)
<div  {!! $attributes->merge(['class' => 'mt-5 w-full px-3 sm:w-1/6']) !!}
    x-data="{
        open: false,
        search: '',
        options: {{ collect($options) }},
        selected: '',
        get filteredOptions() {
            return this.options.filter(option =>
                option.name.toLowerCase().includes(this.search.toLowerCase())
            );
        },
        selectOption(option) {
            this.selected = option.name;
            @this.set('{{ $name }}', option.id); // Update Livewire property
            this.open = false;
            this.search = ''; // Clear search after selection
        }
    }" @click.away="open = false">
    <x-label for="{{ $name }}" value="{{ $label }}" class="block text-sm font-medium text-black"/>
    <div class="relative">
        <button type="button" @click="open = !open" class="relative mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-left bg-white cursor-default">
            <span x-text="selected ? selected : 'Seleccionar'"></span>
            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <div x-show="open" class="absolute z-10 mt-1 w-full max-h-[20rem] rounded-md bg-white shadow-lg overflow-auto focus:outline-none sm:text-sm" style="display: none;">
            <div class="py-1">
                <div class="px-2 pb-2">
                    <input type="text" x-model="search" class="mt-1 block w-full pl-3 pr-3 py-2 text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" placeholder="Buscar...">
                </div>
                <template x-for="option in filteredOptions" :key="option.id">
                    <button :disabled="option.id==null" type="button" @click="selectOption(option)" class="text-gray-900 block w-full text-left px-4 py-2 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                        <span x-text="option.name"></span>
                    </button>
                </template>
                <div x-show="filteredOptions.length === 0" class="text-gray-500 px-4 py-2">
                    No se encontraron opciones.
                </div>
            </div>
        </div>
    </div>
</div>
