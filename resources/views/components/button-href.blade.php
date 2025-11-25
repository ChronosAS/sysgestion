<a {{ $attributes->merge(['class' => 'inline-flex cursor-pointer items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-blue-700 focus:outline-none  disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
