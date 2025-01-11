@props([
    'name',
    'value',
    'title' => null,
    'wire' => 'defer',
    'id' => null
])

<div class="flex items-center">
    <input
        type="checkbox"
        id="{{ $id ?? $title }}"
        name="{{ $name }}"
        value="{{ $value }}"
        wire:model.{{ $wire }}="{{ $name }}"
        @class([
            'focus:ring-blue-500 h-4 w-4 text-blue-600 border-slate-300 rounded cursor-pointer' => !$errors->has($name),
            'focus:ring-red-500 h-4 w-4 text-red-600 border-slate-300 rounded cursor-pointer' => $errors->has($name),
        ])
    >
    <label
        for="{{ $id ?? $title }}"
        @class([
            'ml-3 block text-sm font-medium text-white hover:underline cursor-pointer' => !$errors->has($name),
            'ml-3 block text-sm font-medium text-red-600 hover:underline cursor-pointer' => $errors->has($name),
        ])
    >
        {{ $title }}
    </label>
</div>
