<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="./node_modules//bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href= "{{ asset('css/home.css') }}" />
    <title>Portfolio</title>
  </head>
  <body>
    <header class="background-img">
      <div class="container">
        <div class="social-container">
          <nav>
            <ul class="social-links">
              <li>
                <a href="https://www.twitter.com" target="_blank"
                  ><i class="bi bi-twitter"></i
                ></a>
              </li>
              <li>
                <a href="https://www.facebook.com" target="_blank"
                  ><i class="bi bi-facebook"></i
                ></a>
              </li>
              <li>
                <a href="https://www.youtube.com" target="_blank"
                  ><i class="bi bi-youtube"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="div-center">
          <a href="#" class="logo">Shraddha Shrestha</a>
        </div>
        <div class="nav-container">
          <nav>
            <ul class="nav-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Bio</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <section>
     @yield('content')
      </section>
    </header>
  </body>
</html>
