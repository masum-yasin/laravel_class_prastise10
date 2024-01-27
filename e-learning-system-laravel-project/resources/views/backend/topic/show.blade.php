
<x-master>
    <x-slot:title>
        Topic Details
    </x-slot>
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Topic</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('topics.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <!-- <p>topic: {{ $topic->topics?->title }}</p> -->
    <h1>Title: {{ $topic->name }}</h1>
    <!-- <p>Price:{{ $topic->price }}</p> -->
    <p>Description:{{ $topic->description }}</p>
    <img src="{{ asset('storage/topics/'.$topic->image) }}" />

    

    <p>Is Active ?: {{ $topic->is_active ? 'Yes' : 'No' }}</p>

</x-master>
