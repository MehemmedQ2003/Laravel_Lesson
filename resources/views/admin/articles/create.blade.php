@extends("layout.admin")


@section("css")
    <style>

    </style>
@endsection



@section("content")
    <x-admin.layouts.card :class="'w-75 m-5 mx-auto'">
        <x-slot name='title'>
            Add Article
        </x-slot>
        <x-slot name='content'>
            <form action="" class="w-100 text-start" method="POST">
                {{-- <div class="mb-3">
                    <label for="name" class="mb-2">Article name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Article name">
                </div> --}}

                <x-admin.elements.input
                    :type="'text'"
                    :labelClasses="'text-success'"
                    :id="'name'"
                    :name="'name'"
                    :inputClass="''"
                    :placeholder="'Article name input'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :parentClass="'mb-3'">
                    <x-slot name='label'>
                        Article Name
                    </x-slot>
                </x-admin.elements.input>

                <div class="mb-3">
                    <label for="articleContent" class="mb-2">Article content</label>
                    <textarea name="articleContent" id="articleContent" cols="30" rows="10" class="form-control" placeholder="Article content"></textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="mb-2">Article category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="-1">Choose category</option>
                        <option value="1">PHP</option>
                        <option value="2">Laravel</option>
                    </select>
                </div>

                <x-admin.elements.input
                    :type="'checkbox'"
                    :labelClasses="'text-success'"
                    :id="'status'"
                    :name="'status'"
                    :inputClass="'form-check-input'"
                    :placeholder="'Article name input'"
                    :isDisabled="false"
                    :defaultValue="'Save'"
                    :parentClass="'mb-3 d-flex gap-2'">
                    <x-slot name='label'>
                        Should the article be published?
                    </x-slot>
                </x-admin.elements.input>

                <hr>
                <div class="mb-3">
                    <input type="submit" value="Add article" id="status" class="btn btn-success w-100">
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'>
            Lorem ipsum dolor sit amet.
        </x-slot>
    </x-admin.layouts.card>
@endsection



@section("js")

@endsection
