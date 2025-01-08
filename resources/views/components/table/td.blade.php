<td {{ $attributes->class([
    'px-4 sm:px-6 py-4 text-sm text-white',
    'whitespace-nowrap' => !$attributes->has('class'),
    'whitespace-normal' => $attributes->has('class') && Str::contains($attributes['class'], 'whitespace-normal'),
]) }}>
    {{ $slot }}
</td>
