<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
        <a class="navbar-brand {{ Route::is(patterns: "home") ? 'active' : '' }}" href="{{ route("home") }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("home") ? 'active' : '' }}" href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("about") ? 'active' : '' }}" href="{{ route("about") }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("service") ? 'active' : '' }}" href="{{ route("service") }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("contact") ? 'active' : '' }}" href="{{ route("contact") }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
