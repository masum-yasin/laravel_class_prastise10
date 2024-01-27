<x-master>
    <x-slot:title>
        Course List
        </x-slot>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Courses</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('course.pdf') }}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                    </a>
                </div>
                <a href="{{ route('courses.create') }}">
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
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->title }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('courses.show', $course->id) }}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('courses.edit', $course->id) }}">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="post"
                                style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure want to delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- $courses->links() --}}
</x-master>
