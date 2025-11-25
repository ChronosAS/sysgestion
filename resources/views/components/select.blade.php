@props([
    'name',
    'values',
    'placeholder' => null,
    'disabled' => null,
    'wire' => 'defer',
])

<div class="mt-1 relative">
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        wire:model.{{ $wire }}="{{ $name }}"
        @class([
            'block w-full pl-3 pr-10 py-2 text-sm rounded-md cursor-pointer',
            'bg-white divide-y divide-white text-black border-blue-800 rounded-lg shadow' => !$errors->has($name),
            'border-red-300 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500' => $errors->has($name)
        ])
        @if($disabled)
            disabled
        @endif
    >
        @if ($placeholder)
            <option value="" >{{ $placeholder }}</option>
        @endif
        @foreach ($values as $key => $value)
            <option value="{{ $key }}">{{ str($value)->replace('_',' ') }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        </div>
    @enderror
</div>
