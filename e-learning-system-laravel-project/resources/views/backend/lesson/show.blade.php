
<x-master>
    <x-slot:title>
        Lesson Details
    </x-slot>
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lesson</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('lessons.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <!-- <p>lesson: {{ $lesson->lessons?->title }}</p> -->
    <h1>Title: {{ $lesson->name }}</h1>
    <!-- <p>Price:{{ $lesson->price }}</p> -->
    <p>Description:{{ $lesson->description }}</p>
    <img src="{{ asset('storage/lessons/'.$lesson->image) }}" />

    

    <p>Is Active ?: {{ $lesson->is_active ? 'Yes' : 'No' }}</p>

</x-master>
