<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-200">
    <div class="z-50">
        {{ $logo }}
    </div>

    <img class=" z-40 absolute" src="{{ asset('assets/img/platsol.png') }}" alt="logo-uptjaa">
    <div class=" z-50 w-full sm:max-w-md mt-6 px-6 py-4 bg-transparent/[.05] shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
