<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-power-off" aria-hidden="true"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron / Hero Section -->
{{-- <div class="jumbotron text-center">
    <h1>Welcome to My Portfolio</h1>
    <p>I'm a passionate <strong>web developer</strong> with a love for <strong>design</strong> and <strong>coding</strong>.</p>
    <a class="btn btn-primary btn-lg" href="#contact">Contact Me</a>
</div> --}}