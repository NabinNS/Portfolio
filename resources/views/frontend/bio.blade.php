@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('content')
    <section class="about container mt-5">
        <div class="about-box">
            <img src="{{ asset('images/img9.jpg') }}" alt="">
            <div class="about-text">
                <h1>About Me</h1>
                <h5>Shraddha <span>Shrestha</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ex hic, quos repudiandae ut
                    voluptatem! Accusamus asperiores autem dolores fugit laboriosam laborum magni, nihil nobis pariatur
                    quis ratione sint temporibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                    aliquam et quam suscipit! Delectus et, exercitationem laudantium natus nihil provident quas quidem
                    reprehenderit rerum sint suscipit totam ullam veniam vero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto dignissimos dolore
                    dolores, ducimus ipsa ipsum laboriosam laborum libero magni necessitatibus nisi, qui ut. Autem
                    commodi doloremque eum quia voluptatum.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Corporis cupiditate illo ipsum maxime
                    minus, mollitia neque, numquam, perspiciatis quia ratione repellat sequi tempore? Corporis ea,
                    expedita odio qui repudiandae sit.</p>
                <a href="{{ route('contact') }}">Let's Talk</a>
            </div>
        </div>
    </section>
    <div class="container">
        <h1 style="text-align: center">Images</h1>
    </div>
    <div class="container">
        <div id="imgSlider" class="carousel slide h-50" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{ asset('images/img1.jpg') }}" class="d-block w-100 image-height" alt="Image 1">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100 image-height" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/img3.jpg') }}" class="d-block w-100 image-height" alt="Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imgSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imgSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    @section('scripts')
        <script src="{{ asset('js/about.js') }}" defer></script>
    @endsection
@endsection



