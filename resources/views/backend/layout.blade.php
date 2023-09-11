<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Shraddha Shrestha </title>
    @yield('styles')

    <link rel="stylesheet" href="{{ asset('css/backend/sidebar.css') }}" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    {{-- bootstrap cdn --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @yield('styles')
    @yield('scripts')
</head>

<body>
    <div class="sidebar open">
        <div class="logo-details">
            <div class="logo_name">Shraddha</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('admin.login') }}">
                    <i class='bx bx-log-in'></i>
                    <span class="links_name">Login</span>
                </a>
                <span class="tooltip">Login</span>
            </li>
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class='bx bx-home-heart'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="{{ route('admin.bio') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Bio</span>
                </a>
                <span class="tooltip">Bio</span>
            </li>
            <li>
                <a href="{{ route('admin.post') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Posts</span>
                </a>
                <span class="tooltip">Posts</span>
            </li>
            <li>
                <a href="{{ route('admin.setting') }}">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li>
                <a href="/">
                    <i class='bx bx-arrow-back'></i>
                    <span class="links_name">Frontend</span>
                </a>
                <span class="tooltip">Frontend</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">Portfolio</div>
                        <div class="job">Shraddha Shrestha</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        @yield('content')
    </section>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
