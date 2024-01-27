<x-master>
    <x-slot:title>
        Lesson List
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lesson</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('lessons.index') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                </a>
                <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                <a href="{{ route('lessons.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                </a>
            </div>
            <a href="{{ route('lessons.create') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="plus"></span>
                    Add New
                </button>
            </a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lesson as $lesson)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lesson->name }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('lessons.show', $lesson->id) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('lessons.edit', $lesson->id) }}">Edit</a>
                    <form action="{{ route('lessons.destroy', $lesson->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- $lesson->links() --}}
</x-master>
 
