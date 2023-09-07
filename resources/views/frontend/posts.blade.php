@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@endsection
@section('content')

    <section class="blog container mt-3">

        <div class="text-center">
            <h1 class="posts-heading">Posts</h1>
        </div>


        <div id="blog-post-list" class="row">
            <div class="row">
                @foreach ($stories as $story)
                    <div class="col-12 col-md-4 mb-3">
                        <div class="blog-card">
                            <p>{{ $story->datePosted }}</p>
                            <h3>{{ $story->title }}</h3>
                            <p class="story-content">{{ $story->story }}</p>
                            <a href="#"><span>Read More.....</span></a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="blog-card">
                <p>6th August 2023</p>
                <h3>Blog Post Title 1</h3>
                <p>Short excerpt or summary of the blog post content goes here...</p>
                <a href="blog-post-1.html"><span>Read More.....</span></a>
            </div> --}}
        </div>
    </section>
@endsection
