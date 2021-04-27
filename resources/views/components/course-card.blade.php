<div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
    <a href="{{route('course',$course->slug ) }}">
        <img src="{{$course->image}}" alt="" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{$course->name}}</h2>
        <h2 class="text-md text-gray-500 ">{{$course->excerpt}}</h2>
        <img src="{{$course->user->avatar}}" alt="" class="rounded-full mx-auto h-16 w-16">
    </a>
</div>