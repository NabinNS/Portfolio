@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/fullstory.css') }}">
@endsection
@section('content')
    <div class="post-body">
        <div class="text-center">
            <h1 class="post-title">{{ $post->title }}</h1>
        </div>
        <p class="datePosted">{{ $post->datePosted }}</p>
        <p class="post-body">{!! $post->post !!}</p>
    </div>
@endsection
