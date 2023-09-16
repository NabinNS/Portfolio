@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <style>
        .image-container {
            width: 100%;
            padding-bottom: 75%;
            /* This creates a square container where height is half of the width */
            position: relative;
            overflow: hidden;
        }

        .img-square {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* This ensures the entire image fits within the container */
        }
    </style>
@endsection
@section('content')
    <section class="about container my-3">
        <div class="text-center">
            <h1 class="heading">About Me</h1>
        </div>

        @foreach ($bios as $index => $bio)
            @if ($index % 2 == 0)
                <div class="row bio-body my-5">
                    <div class="col-md-12 col-lg-6 my-auto text-center">
                        <div class="image-container">
                            <img class="img-square" src="{{ asset('images/' . $bio->photoPath) }}" alt="">
                        </div>
                    </div>
                    <div class="about-text col-md-12 col-lg-6">
                        <h5>{{ $bio->title }}</h5>
                        <p>{!! $bio->description !!}</p>
                    </div>
                </div>
                <hr>
            @else
                <div class="row my-5">

                    <div class="about-text col-md-12 col-lg-6">
                        <h5>{{ $bio->title }}</h5>
                        <p>{!! $bio->description !!}</p>
                    </div>
                    <div class="col-md-12 col-lg-6 my-auto text-center">
                        <div class="image-container">
                            <img class="img-square" src="{{ asset('images/' . $bio->photoPath) }}" alt="">
                        </div>
                    </div>
                </div>
                <hr>
            @endif
            {{-- <div class="row my-5">
                <div class="col-md-12 col-lg-6 my-auto text-center">
                    <div class="image-container">
                        <img class="img-square" src="{{ asset('images/' . $bio->photoPath) }}" alt="">
                    </div>
                </div>
                <div class="about-text col-md-12 col-lg-6">
                    <h5>{{ $bio->title }}</h5>
                    <p>{!! $bio->description !!}</p>
                </div>
            </div>
            <hr> --}}
        @endforeach
    </section>
@endsection
