<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="shortcut icon" href="https://play-lh.googleusercontent.com/k_5zF1l0Y3Gfo-Ll7p8ik2o6XZKxqMeapUJEu92b3gw4JrYxKKdUSyES7NaeoT3GTp0" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/sweatalert/sweetalert2.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    @yield("css")
    <style>
        .navbar .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body>

    @include("layout.front.navbar")

    @yield("content")

    @include("layout.front.footer")

    @yield("js")


    <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/sweatalert/sweetalert2.all.min.js") }}"></script>
    <script src="{{ asset("assets/jquery/jquery-3.7.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
</body>
</html>
