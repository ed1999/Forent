@props(['course'])

<article class="card">
    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">

    <div class="card-body">
         <h1 class="card-title">{{Str::limit($course->title, 40)}}</h1>
         <p>Arrendatario: {{$course->teacher->name}}</p>

    <div class="flex">

         <ul class="flex text-sm">
             <li class="mr-1">
                 <i class="fas fa-star text-{{$course->rating >= 1 ? 'gray' : 'yellow'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$course->rating >= 2 ? 'gray' : 'yellow'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$course->rating >= 3 ? 'gray' : 'yellow'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$course->rating >= 4 ? 'gray' : 'yellow'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$course->rating == 5 ? 'gray' : 'yellow'}}-400"></i>
             </li>
         </ul>

         <p class="text-sm text-gray-900 ml-auto">
             <i class="fas fa-users"></i>
             ({{$course->students_count}})
         </p>
     </div>

     <a href="{{Route('courses.show', $course)}}" class="mt-4 btn btn-primary btn-block">
         Más información
     </a>

     </div>
 </article>    