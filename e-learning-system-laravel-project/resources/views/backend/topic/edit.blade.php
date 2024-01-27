<x-master>
    <x-slot:title>
        Topics Create
        </x-slot>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('topic') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('topics.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-info">
                        <span data-feather="list"></span>
                        {{ __('List') }}
                    </button>
                </a>
            </div>
        </div>

        <form action="{{ route('topics.update', $topic->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <x-forms.input type="text" name="name" :value="old('name', $topic->name)" placeholder="Enter title" required
                label="Title" />
            <x-forms.select name="lesson_id" required label="Lesson" :selected="old('lesson_id', $topic->lesson_id)" :options="$lesson_id" />

            <x-forms.textarea name="description" label="Description" :value="old('description', $topic->description)" />



            @php
                $checklist = ['1' => 'Is Active'];

                $checkedItems = [$topic->is_active];

            @endphp

            <x-forms.checkbox name="is_active" id="is_active" :checklist="$checklist" :checkedItems="$checkedItems" />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-master>
