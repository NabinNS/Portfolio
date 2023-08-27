{{-- <link rel="stylesheet" href="{{ asset('css/backend/sidebar.css') }}" /> --}}

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
   </head>
<body>
  <div class="sidebar open">
    <div class="logo-details">
        <div class="logo_name">Shraddha</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
            <i class='bx bx-home-heart' ></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Bio</span>
       </a>
       <span class="tooltip">Bio</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-contact'></i>
         <span class="links_name">Contact</span>
       </a>
       <span class="tooltip">Contact</span>
     </li>
     <li>
        <a href="#">
          <i class='bx bx-chat' ></i>
          <span class="links_name">Story</span>
        </a>
        <span class="tooltip">Story</span>
      </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
        <a href="/">
            <i class='bx bx-arrow-back' ></i>
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
  <script src="{{ asset('js/sidebar.js') }}"> </script>
</body>
</html>