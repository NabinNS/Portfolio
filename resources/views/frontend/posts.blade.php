@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@endsection
@section('content')

<section class="blog container mt-3">

    <div class="text-center">
        <h1 class="posts-heading">Posts</h1>
      </div>
      

     <div id="blog-post-list" class="card-container">
        @foreach ($posts as $post)
        <div class="blog-card">
            <p>{{ $post->datePosted }}</p>
            <h3>{{ $post->title }}</h3>
            <p class="story-content">{{ $post->post }}</p>
            <a href="{{ route('viewfullpost',$post->id) }}"><span>Read More.....</span></a>
        </div>
        @endforeach

    {{-- <div class="blog-card">
        <p>6th August 2023</p>
        <h3>Blog Post Title 1</h3>
        <p>Short excerpt or summary of the blog post content goes here...</p>
        <a href="blog-post-1.html"><span>Read More.....</span></a>
    </div> --}}
</div>
</section>
@endsection