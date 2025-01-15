@props([
    'title',
    'color' => 'slate'
])

<span
    @class([
        'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium uppercase',
        'bg-blue-100 text-blue-800' => $color === 'blue',
        'bg-slate-100 text-slate-800' => $color === 'slate',
        'bg-green-100 text-green-800' => $color === 'green',
        'bg-red-100 text-red-800' => $color === 'red',
        'bg-yellow-100 text-yellow-800' => $color === 'yellow',
    ])
>
    {{ $title }}
</span>
