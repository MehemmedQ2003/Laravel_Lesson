@extends("layout.front")


@section("css")
    <style>
        h1 {
            color: green;
        }
    </style>
@endsection



@section("content")

    @php
        $placeholder = "Enter your name"
    @endphp

    <x-input-text :type="'text'" :placeholder="$placeholder" class="form-control w-25 bg-info"/>
    <x-input-text2 :type="'checkbox'" :placeholder="$placeholder" class="bg-danger text-white"/>
@endsection



@section("js")
    <script>
        console.log("About Page JS");
    </script>
@endsection
