<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <title>Portfolio</title>
</head>

<body>
    <header class="container my-3 nav-container">
        <div>
            <a href="#" class="logo">Shraddha Shrestha</a>
        </div>
        <div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Bio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <nav>
                <ul class="social-links">
                    <li>
                        <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
</body>

</html>