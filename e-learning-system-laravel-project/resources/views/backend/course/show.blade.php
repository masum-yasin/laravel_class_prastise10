
 <x-master>
    <x-slot:title>
        Course Details
    </x-slot>
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Course</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('courses.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <p>course: {{ $course->course?->title }}</p>
    <h1>Title: {{ $course->title }}</h1>
    <p>Price:{{ $course->price }}</p>
    <p>Description:{{ $course->description }}</p>
    <img src="{{ asset('storage/courses/'.$course->image) }}" />

    

    <p>Is Active ?: {{ $course->is_active ? 'Yes' : 'No' }}</p>

</x-master>
