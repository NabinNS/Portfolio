@extends('backend.layout')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">

            <div class="card shadow-lg" id="homeSetting">

                <div class="card-header text-center text-white" style=" background: #f11010;">
                    <h4>Edit post</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.updatepost', $post->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    value="{{ $post->title }}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="description" class="form-label">post:</label>
                                <textarea class="form-control" id="description" name="post" rows="5">{{ str_replace('<br />', '', $post->post) }}</textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary mt-3">Cancel</button>
                            <button type="submit" class="btn btn-warning mt-3 ml-2">Update post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
