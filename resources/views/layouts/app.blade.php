<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
    @yield('styles')
    @yield('scripts')
    <title>Portfolio</title>
    <style>
        .navbar-nav a.nav-item.nav-link {
            padding: 6px 15px;
            border-radius: 20px;
            color: #800000;
            margin: 0 10px;
            font-weight: 600;
        }

        .navbar-nav a.nav-item.nav-link.active,
        .navbar-nav a.nav-item.nav-link:hover {
            background: #800000;
            color: white;
            transition: color 0.3s;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D4D1CB;">
    <a class="navbar-brand navbar-brand-orange" href="#" style="color:#AB372E; font-weight: bold;">Shraddha </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link mx-3 {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-item nav-link mx-3 {{ request()->is('bio') ? 'active' : '' }}"
               href="{{ route('bio') }}">Bio</a>
            <a class="nav-item nav-link mx-3 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="nav-item nav-link mx-3 {{ request()->is('contact') ? 'active' : '' }}"
               href="{{ route('contact') }}">Contact</a>
            <a class="nav-item nav-link mx-3" href="admin/home">Backend</a>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <p>Email: shraddhashrestha@gmail.com</p>
                <p>Phone: +977 980 000 0000</p>
            </div>
            <div class="col-md-6">
                <h3>Follow Me</h3>
                <ul class="social-media">
                    <li><a href="https://www.facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com" class="social-link"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com" class="social-link"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
