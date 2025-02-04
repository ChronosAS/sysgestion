<x-app-layout>
    

    <div class="py-12">
        <div class="w-[75%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <!-- Carousel Start -->
                <div x-data="carousel()" class="relative">
                    <div class="flex overflow-hidden">
                        <template x-for="(card, index) in cards" :key="index">
                            <div x-show="currentSlide === Math.floor(index / 3)" class="flex md:w-1/3 sm:w-1/2 p-4 ">
                                <div class="bg-slate-300 p-4 rounded-lg shadow-lg">
                                    <img :src="card.image" class="w-[25rem] h-[23rem] mb-4">
                                    <h2 class="text-sm  font-bold mb-2" x-text="card.title"></h2>
                                    <p class="text-gray-700 text-sm font-semibold" x-text="card.description"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                    <button @click="currentSlide = (currentSlide - 1 + Math.ceil(cards.length / 3)) % Math.ceil(cards.length / 3)"  class="  absolute  left-0 top-1/2 transform -translate-y-1/2  -px-6 py-1  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button @click="currentSlide = (currentSlide + 1) % Math.ceil(cards.length / 3)"  class="absolute  right-0  top-1/2 transform -translate-y-1/2  -px-6 py-1  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('carousel', () => ({
                            cards: [
                                {
                                    image: 'assets/img/foto1.webp',
                                    title: 'La dirección de Gestión Social de la Alcaldía de Lechería celebró el cumpleaños de los adultos mayores que forman parte del programa "Abuelos de Lechería".',
                                    description: 'En esta oportunidad, más de 60 abuelos fueron agasajados en una fiesta que se realiza bimensualmente y que se ha convertido en una tradición llena de alegría.'
                                },
                                {
                                    image: 'assets/img/foto2.webp',
                                    title: 'La plaza "El Parque" se convirtió en un espacio de paz y armonía gracias a la actividad "Yoga Para Abuelos", organizada por la dirección de Gestión Social de la Alcaldía de Lechería.',
                                    description: 'El evento fue una ocasión especial para que los presentes disfrutaran de un ambiente festivo y compartieran momentos inolvidables.'
                                },
                                {
                                    image: 'assets/img/foto3.webp',
                                    title: 'Más de 70 adultos mayores del programa “Abuelos de Lechería”, de la dirección Gestión Social de la Alcaldía de Lechería, tuvieron una mañana entretenida en las instalaciones del Centro de formación teatral, Puertoteatro el pasado jueves 3 de octubre. ',
                                    description: 'Para la gestión del alcalde de Lechería Manuel Ferreira esta actividad tiene el compromiso de servir a los adultos mayores y promover el envejecimiento activo y saludable a través de diversas actividades recreativas, culturales y sociales.'
                                },
                                {
                                    image: 'assets/img/foto4.webp',
                                    title: 'Nuestro programa de “visitas domiciliarias” se mantiene en este 2025, brindando atención médica y cuidados especiales a nuestros “Abuelos de Lechería”.',
                                    description: 'Cada jueves por la mañana, de la mano de la doctora de la Clínica Municipal de Lechería (Imasur) y voluntaria social de la gestión, Jennis Barrera, se realizan chequeos médicos de rutina para constatar la salud de los adultos mayores pertenecientes al programa “Abuelos de Lechería”.'
                                },
                                {
                                    image: 'assets/img/foto5.webp',
                                    title: 'Con mucho cariño, celebramos nuestro compartir navideño para los abuelitos de nuestro programa. Como cada año, disfrutamos del plato navideño y música increíble.',
                                    description: 'Además de ofrecer atención médica, se dio inicio al compartir navideño para el programa "Abuelos de Lechería".'
                                },
                                {
                                    image: 'assets/img/foto6.webp',
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
