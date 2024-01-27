<x-master>
    <x-slot:title>
        {{ __('Topic Create') }}
        </x-slot>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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

        <form
            action="{{ route('topics.store') }}"
            method="post"
            enctype="multipart/form-data">
            @csrf


           <x-forms.input type="text" name="name" placeholder="Enter title" required label="Title" />

           <x-forms.select name="lesson_id" required label="Lesson" :options="$lessons" />

        <x-forms.textarea name="description" label="Description"  />


            @php
                $checklist = ['1'=>'Is Active'];
            @endphp

            <x-forms.checkbox name="is_active" id="is_active" :checklist="$checklist" />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-master>
