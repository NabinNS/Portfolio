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
                    <p class="story-content">{!! $post->post !!}</p>
                    <a href="{{ route('viewfullpost', $post->id) }}"><span>Read More.....</span></a>
                </div>
            @endforeach
        </div>
        <div class="mt-3 d-flex justify-content-end" >
            {{ $posts->links() }}
        </div>

    </section>
@endsection
