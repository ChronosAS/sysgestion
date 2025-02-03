<x-app-layout>
    <x-slot name="header">
        Inicio
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Carousel Start -->
                <div x-data="carousel()" class="relative">
                    <div class="flex overflow-hidden">
                        <template x-for="(card, index) in cards" :key="index">
                            <div x-show="currentSlide === Math.floor(index / 3)" class="flex-shrink-0 w-full sm:w-1/3 p-4">
                                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                                    <img :src="card.image" class="w-full h-auto mb-4">
                                    <h2 class="text-lg font-semibold mb-2" x-text="card.title"></h2>
                                    <p class="text-gray-700" x-text="card.description"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                    <button @click="currentSlide = (currentSlide - 1 + Math.ceil(cards.length / 3)) % Math.ceil(cards.length / 3)" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1">Prev</button>
                    <button @click="currentSlide = (currentSlide + 1) % Math.ceil(cards.length / 3)" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1">Next</button>
                </div>
                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('carousel', () => ({
                            cards: [
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
                                    title: 'Card Title 1',
                                    description: 'This is a description for card 1.'
                                },
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
                                    title: 'Card Title 2',
                                    description: 'This is a description for card 2.'
                                },
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
                                    title: 'Card Title 3',
                                    description: 'This is a description for card 3.'
                                },
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
                                    title: 'Card Title 4',
                                    description: 'This is a description for card 4.'
                                },
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
                                    title: 'Card Title 5',
                                    description: 'This is a description for card 5.'
                                },
                                {
                                    image: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
                                    title: 'Card Title 6',
                                    description: 'This is a description for card 6.'
                                }
                            ],
                            currentSlide: 0
                        }))
                    })
                </script>
                <!-- Carousel End -->
            </div>
        </div>
    </div>
</x-app-layout>
