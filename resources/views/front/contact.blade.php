@extends("layout.front")


@section("css")
    <style>
        h1 {
            color: teal;
        }
    </style>
@endsection



@section("content")
    {{-- <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Contact Page</h1>
        <form action="{{ route("contact") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>


    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Contact Page 2</h1>
        <form action="{{ route("user", ["id" => 5, "name" => "Muhammed"]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>


    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Support form 2</h1>
        <form action="{{ route("support-form.support") }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>


    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Update User (Patch)</h1>
        <form action="{{ route("users.update", ['id' => 10]) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>

    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">
        <h1>Update User (Put)</h1>
        <form action="{{ route("users.updateAll", ['id' => 10]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr> --}}

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
