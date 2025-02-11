<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <!-- Slider Start -->
                <div x-data="Carousel()" class="relative w-full">
                    <div class="overflow-hidden rounded-lg">
                        <div class="flex transition-transform duration-500 ease-in-out pb-10" :style="`transform: translateX(-${currentIndex * 100}%)`">
                            <template x-for="(card, index) in cards" :key="index">
                                <div  class="w-full flex-shrink-0">
                                    <div class="bg-slate-300 p-4 rounded-lg shadow-lg w-full">
                                        <img :src="card.image" class="w-[25rem] h-[20rem] sm:w-[23rem] sm:h-[20rem] xl:w-[30rem] xl:h-[24rem] md:w-[15rem] md:h-[13rem] 2xl:w-[30rem] 2xl:h-[24rem] mb-4">
                                        <h2 class="text-sm font-bold mb-2" x-text="card.title"></h2>
                                        <p class="text-gray-700 text-sm font-semibold" x-text="card.description"></p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 pt-5">
                        <template x-for="index in cards.length" :key="index">
                            <button class="rounded-full w-3 h-3 focus:outline-none" :class="{ 'bg-blue-500': currentIndex === index - 1, 'bg-gray-300': currentIndex !== index - 1 }" @click="goToSlide(index - 1)">
                            
                            </button>
                        </template>
                    </div>
                </div>
                <!-- Carousel End -->
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('Carousel', () => ({
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
                        title: 'La dirección Gestión Social de la Alcaldía de Lechería incluyó atención psicológica en visitas domiciliarias a “Abuelos de Lechería”',
                        description: 'Cada jueves por la mañana, de la mano de la doctora de la Clínica Municipal de Lechería (Imasur) y voluntaria social de la gestión, Jennis Barrera, se realizan chequeos médicos de rutina para constatar la salud de los adultos mayores pertenecientes al programa “Abuelos de Lechería”.'
                    }
                ],
                currentIndex: 0,
                interval: null,
                init() {
                    this.startCarousel();
                },
                startCarousel() {
                    this.interval = setInterval(() => {
                        this.currentIndex = (this.currentIndex + 1) % this.cards.length;
                    }, 5000);
                },
                stopCarousel() {
                    clearInterval(this.interval);
                },
                goToSlide(index) {
                    this.currentIndex = index;
                    this.stopCarousel();
                    this.startCarousel();
                }
            }))
        })
    </script>
</x-app-layout>
