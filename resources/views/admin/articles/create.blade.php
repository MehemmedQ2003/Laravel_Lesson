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
            <form action="" class="w-100 text-start">
                {{-- Text input section --}}
                <x-admin.elements.input
                    :type="'text'"
                    :labelClasses="'text-success'"
                    :id="'name'"
                    :name="'name'"
                    :inputClass="''"
                    :placeholder="'Article name input'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :isLabelAfter="false"
                    :parentClass="'mb-3'">
                    <x-slot name='label'>
                        Article Name
                    </x-slot>
                </x-admin.elements.input>


                {{-- Textarea section --}}
                <x-admin.elements.textarea
                    :labelClasses="'text-success mb-2'"
                    :id="'articleContent'"
                    :name="'articleContent'"
                    :placeholder="'Article content'"
                    :parentClass="'mb-3'"
                    :style="'resize: none;'">
                    <x-slot name='label'>
                        Article content
                    </x-slot>
                </x-admin.elements.textarea>

                {{-- Select Option section --}}
                @php
                    $options = ['-1' => 'Choose category', '1' => 'PHP', '2' => 'Laravel'];
                @endphp

                <x-admin.elements.select
                    :type="'text'"
                    :labelClasses="'text-success mb-2'"
                    :id="'category'"
                    :name="'category'"
                    :inputClass="'form-select'"
                    :parentClass="'mb-3'"
                    :options="$options"
                    :defaultValue="'-1'">
                    <x-slot name='label'>
                        Article category
                    </x-slot>
                </x-admin.elements.select>


                {{-- Checkbox input section --}}
                <x-admin.elements.input
                    :type="'checkbox'"
                    :labelClasses="'text-success'"
                    :id="'status'"
                    :name="'status'"
                    :inputClass="'form-check-input'"
                    :placeholder="'Article name input'"
                    :isDisabled="false"
                    :defaultValue="'Save'"
                    :parentClass="'mb-3 d-flex gap-2'"
                    :isLabelAfter="false">
                    <x-slot name='label'>
                        Should the article be published?
                    </x-slot>
                </x-admin.elements.input>


                {{-- Submit button section --}}
                <x-admin.elements.input
                    :type="'submit'"
                    :id="'status'"
                    :inputClass="'btn btn-success w-100'"
                    :defaultValue="'Add article'"
                    :parentClass="'mb-3'">
                </x-admin.elements.input>
            </form>
        </x-slot>
        <x-slot name='footer'>
            Lorem ipsum dolor sit amet.
        </x-slot>
    </x-admin.layouts.card>
@endsection



@section("js")

@endsection
