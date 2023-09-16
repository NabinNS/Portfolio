@extends('layouts.app')
@section('styles')
    <style>


    </style>
@endsection
@section('content')
    <section class="home">

        <div class="detel">
            <h5>Hello, my name is </h5>
            <h1>Shraddha <span>Shrestha </span></h1>
            <h6 class="home-bio">
                Welcome to my portfolio
                <p>
                    <br />
                    {!! $user->description !!}

                </p>
                <p>

                </p>
            </h6>
            <a href="#" class="btn btn-outline-orange">View More </a>
            <br>
            <a href="#" class="btn btn-outline-secondary">Contact Me </a>
            <div class="social-media-links mt-3 text-center">
                <a href="https://www.facebook.com" class="social-link ms-5"><i class="fab fa-facebook-f fa-lg"
                        style="color:#AB372E"></i></a>
                <a href="https://www.twitter.com" class="social-link ms-5"><i class="fab fa-twitter fa-lg"
                        style="color:#AB372E"></i></a>
                <a href="https://www.instagram.com" class="social-link ms-5"><i class="fab fa-instagram fa-lg"
                        style="color:#AB372E"></i></a>
            </div>
        </div>
        <div class="images">
            <img src="{{ asset('images/' . $user->imagePath) }}" alt="profile image" class="girl">
        </div>
    </section>
    <section class="section-container">
        <div class="container">
            <div class="text-center">

                <h1 class="border-service">Our Services</h1>
            </div>

            <div class="d-flex justify-content-center mb-5">
                @foreach ($services as $service)
                <img src="{{ asset('images/' . $service->logoPath) }}" alt="logo"
                class="icon-image">
                @endforeach
            </div>
            <hr>
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-md-4 mb-4">
                        <div class="card card-equal-height">
                            <div class="box">
                                <div class="text-center">
                                    <img src="{{ asset('images/' . $service->logoPath) }}" alt="logo"
                                        class="icon-image">
                                </div>
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-4 mb-4">
                    <div class="card card-equal-height">
                        <div class="box">

                            <i class="fa fa-user"></i>
                            <h3>Service 1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic error. At, cupiditate
                                inventore. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-equal-height">
                        <div class="box">
                            <i class="fa fa-handshake"></i>
                            <h3>Service 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic error. At, cupiditate
                                inventore. Non, ullam quibusdam. Alias repudiandae quidem numquam temporibus dolorum ab
                                accusantium, accusamus, totam perspiciatis voluptatum consequatur.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>
    
    <div class="d-flex justify-content-center align-items-center deal mt-4">
        <div>
            <h4 class= "deal-tagline">Let Me Get You A Beautiful Deal</h4>
         <div class="text-center mt-4">
             <a href="{{ route('contact') }}" class="btn btn-maroon">Contact me</a>
            </div>
        </div>
    </div>
@endsection
