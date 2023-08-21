@extends('layouts.app')
@section('content')
    <div class="detel">
      <h5>Hello, my name is </h5>
        <h1>Shraddha <span>Shrestha </span></h1>
        <h6 class="home-bio">
          Welcome to my portfolio  <br>A showcase of my journey as a CEO in the insurance and real estate industries, as well as my engaging role as a podcaster. <br>Explore my world where business, properties, and podcasts converge to create a unique tapestry of experiences.
        </h6>
        <a href="#" class="btn btn-outline-primary">View More </a>
        <a href="#" class="btn btn-outline-secondary">Contact Me </a>
    </div>
    <div class="images">
      <img src="{{ asset('images/shraddha-home.png') }}" alt="profile image" class="girl">
    </div>
@endsection
