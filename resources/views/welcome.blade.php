<x-app-layout>

    
    {{-- Portada --}}

    <section class="bg-cover" style="background-image: url({{asset('img/home/ne.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-fold text-4xl">LA MEJOR APP PARA ARRENDATARIOS</h1>
                <p class="text-black text-lg mt-2 mb-4">Podrás buscar la propiedad que requiereas a los mejores precios</p>
                
                @livewire('search')

            </div>
        </div>
    </section>


    <section class="mt-24">
        <h1 class="text-blue-900 text-center text-3xl mb-6">CONÓCENOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/q.png')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">La mejor comodidad</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/dj.png')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Los mejores precios</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/no.png')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Rápido y seguro</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/qc.png')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Más cerca de ti</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-900 py-12">
        <h1 class="text-center text-white text-3xl">
            Conoce las propiedades que puedes rentar.
        </h1>
        <p class="text-center text-white mt-3">Dirigete al catálogo de propiedades y filtralos por categorias de acuerdo a tu perfil</p>

        <div class="flex justify-center mt-4">
                <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Catálogo de Propiedades
                </a>
        </div>

    </section>


    
    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-700">LAS MEJORES VALORACIONES DE VIVIENDA</h1>
        <p class="text-center text-gray-600 text-sm mb-6">Tenemos las mejores viviendas</p>
   
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />   
            @endforeach
            </div>

        </section>
</x-app-layout>


