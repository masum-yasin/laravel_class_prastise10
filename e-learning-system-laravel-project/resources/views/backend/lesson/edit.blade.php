<x-master>
    <x-slot:title>
        Lessons Create
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('Lesson') }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('lessons.index') }}">
                <button type="button" class="btn btn-sm btn-outline-info">
                    <span data-feather="list"></span>
                    {{ __('List') }}
                </button>
            </a>
        </div>
    </div>

    <form 
        action="{{ route('lessons.update', $lesson->id) }}" 
        method="post" 
        enctype="multipart/form-data">
        @csrf
        @method('patch')

        <x-forms.input type="text" name="name" :value="old('name', $lesson->name)" placeholder="Enter title" required label="Title" />

       

        <x-forms.textarea name="description" label="Description" :value="old('description', $lesson->description)" />

       

        @php
            $checklist = ['1'=>'Is Active'];

            $checkedItems = [$lesson->is_active];

        @endphp

        <x-forms.checkbox 
        name="is_active" 
        id="is_active" 
        :checklist="$checklist"
        :checkedItems="$checkedItems"
        />

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>
