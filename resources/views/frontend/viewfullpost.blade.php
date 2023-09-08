@extends('layouts.app')
@section('styles')
    <style>
        .post-body {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #e8e6e0;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }

        .post-title {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
            border-bottom: #800000 3px solid;
            display: inline-block;
            padding: 0 30px;

        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
            margin-bottom: 10px;
        }

        .datePosted {
            font-style: italic;
            font-size: 14px;
            color: #999;
            text-align: right;
        }
        .post-body{
            text-align: center;
        }
    </style>
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
