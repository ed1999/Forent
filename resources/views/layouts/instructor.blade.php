<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')


            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">
                <aside>
        
                    <h1 class="font-bold text-lg mb-4">Edición de la propiedad</h1>
                    <ul class="text-sm  text-gray-600" mb-4>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.edit', $course)}}">Información de la propiedad</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4  @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.curriculum', $course)}}">Videos de la propiedad</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.goals', $course)}}">Metas de la propiedad</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent @routeIs('instructor.courses.students', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.students', $course)}}">Estudiantes</a>
                        </li>

                        @if ($course->observation)
                            <li class="leading-7 mb-1 border-l-4 border-transparent @routeIs('instructor.courses.observation', $course) border-indigo-400 @else border-transparent @endif pl-2">
                                <a href="{{route('instructor.courses.observation', $course)}}">Arrendatarios</a>
                            </li>
                        @endif
                    </ul>

                    @switch($course->status)
                    @case(1)
                    <form action="{{route('instructor.courses.status', $course)}}" method="POST">
                        @csrf
                        
                        <button class="btn btn-danger" type="submit">Solicitar revisión</button>
                    </form>
                    @break
                    @case(2)
                        Esta propiedad se encuentra en revisión
                        @break
                    @case(3)
                        Esta propiedad se encuentra publicado
                        @break
                    @default

                    @endswitch


                    <!-- JOHN MENDEZ -->
                    



                </aside>
        
                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                       {{$slot}}
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

@isset($js)
{{$js}}
    
@endisset

    </body>
</html>
