@extends("layout.front")


@section("css")
    <style>
        h1 {
            color: teal;
        }
    </style>
@endsection



@section("content")
    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Update User (Put)</h1>
        <form action="{{ route("user.delete", ['id' => 150]) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection



@section("js")
    <script>
        console.log("Contact Page JS");
    </script>
@endsection
