<x-app-layout>
    <x-slot name="header">
        Inicio
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div x-data="{ currentSlide: 0, slides: ['https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp', 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp', 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp'] }" class="relative w-full h-64">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index" class="absolute inset-0 w-full h-full bg-cover bg-center" :style="'background-image: url(' + slide + ')'"></div>
                    </template>
                    <button @click="currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded-full "> < </button>
                    <button @click="currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded-full"> > </button>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
