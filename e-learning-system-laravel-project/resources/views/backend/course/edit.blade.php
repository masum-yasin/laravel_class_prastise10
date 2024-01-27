<x-master>
    <x-slot:title>
        Course Create
        </x-slot>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('Courses') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('courses.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-info">
                        <span data-feather="list"></span>
                        {{ __('List') }}
                    </button>
                </a>
            </div>
        </div>

        <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <x-forms.input type="text" name="title" :value="old('title', $course->title)" placeholder="Enter title" required
                label="Title" />

           

            <x-forms.select name="category_id" required label="Category" :selected="old('category_id', $course->category_id)" :options="$categories" />
            <x-forms.select name="topic_id" required label="Topic" :selected="old('topic_id', $course->topic_id)" :options="$topics" />
            <x-forms.input type="file" name="image" label='Picture' />

            <x-forms.textarea name="description" label="Description" :value="old('description', $course->description)" id="description"/>



            @php
                $checklist = ['1' => 'Is Active'];

                $checkedItems = [$course->is_active];

            @endphp

            <x-forms.checkbox name="is_active" id="is_active" :checklist="$checklist" :checkedItems="$checkedItems" />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-master>
