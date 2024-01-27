<x-master>
    <x-slot:title>
        {{ __('Category Create') }}
        </x-slot>


        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('Category') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('categories.index') }}">
                    <button type="button" class="btn btn-sm btn-outline-info">
                        <span data-feather="list"></span>
                        {{ __('List') }}
                    </button>
                </a>
            </div>
        </div>

        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf


            <x-forms.input type="text" name="title" placeholder="Enter title" required label="Title" />

            <x-forms.textarea name="description" label="Description" id="description"/>

            @php
                $checklist = ['1' => 'Is Active'];
            @endphp

            <x-forms.checkbox name="is_active" id="is_active" :checklist="$checklist" />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-master>
