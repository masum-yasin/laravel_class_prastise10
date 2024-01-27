<x-master>
    <x-slot:title>
        {{ __('Topic List') }}
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('topics Trash') }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('topics.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    {{ __('List') }}
                </button>
            </a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>{{ __('SL#') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topics as $topic)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $topic->title }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('topics.show', $topic->id) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('topics.restore', $topic->id) }}">Restore</a>
                    <form action="{{ route('topics.delete', $topic->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')" title="Permanent Delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-master>
