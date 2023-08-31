@extends('layouts.app')
@section('content')
    <section class="home">
        
        <div class="detel">
            <h5>Hello, my name is </h5>
            <h1>Shraddha <span>Shrestha </span></h1>
            <h6 class="home-bio">
                Welcome to my portfolio
                <p>
                    <br/>
                    A showcase of my journey as a CEO in the insurance and real estate industries, as well as my
                    engaging role as a podcaster.
                </p>
                <p>
                    Explore my world where business, properties, and podcasts converge to create a unique tapestry of
                    experiences.
                </p>
            </h6>
            <a href="#" class="btn btn-outline-orange">View More </a>
            <br>
            <a href="#" class="btn btn-outline-secondary">Contact Me </a>
            <div class="social-media-links mt-5 text-center">
                <a href="https://www.facebook.com" class="social-link mr-5"><i class="fab fa-facebook-f fa-lg"
                                                                               style="color:#AB372E"></i></a>
                <a href="https://www.twitter.com" class="social-link mr-5"><i class="fab fa-twitter fa-lg"
                                                                              style="color:#AB372E"></i></a>
                <a href="https://www.instagram.com" class="social-link mr-5"><i class="fab fa-instagram fa-lg"
                                                                                style="color:#AB372E"></i></a>
            </div>
        </div>
        <div class="images">
            <img src="{{ asset('images/shraddha-home.png') }}" alt="profile image" class="girl">
        </div>
    </section>
    <section class="section-container">
        <div class="max-width">
            <h1>Our Services</h1>
            <div class="content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-user"></i>
                        <h3>Service 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic error. At, cupiditate
                            inventore. Non, ullam quibusdam. Alias repudiandae quidem numquam temporibus dolorum ab
                            accusantium, accusamus, totam perspiciatis voluptatum consequatur.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-handshake"></i>
                        <h3>Service 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic error. At, cupiditate
                            inventore. Non, ullam quibusdam. Alias repudiandae quidem numquam temporibus dolorum ab
                            accusantium, accusamus, totam perspiciatis voluptatum consequatur.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-building"></i>
                        <h3>Service 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic error. At, cupiditate
                            inventore. Non, ullam quibusdam. Alias repudiandae quidem numquam temporibus dolorum ab
                            accusantium, accusamus, totam perspiciatis voluptatum consequatur.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
