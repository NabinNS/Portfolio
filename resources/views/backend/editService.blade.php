@extends('backend.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">


            <div class="card shadow-lg" id="servicesSetting">
              
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Edit Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6 text-center my-auto">
                            <img class="card-img-top" style="height: 300px; width: 300px;"
                                src="{{ asset('images/'.$service->logoPath) }}" alt="Home Image">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <form method="POST" action="{{ route('admin.updateservice',$service->id) }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="prevphoto" value="{{ $service->logoPath }}">
                                <div class="mb-3">
                                    <label for="imageUpload" class="form-label">Logo:</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="imageUpload" name="logo">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">{{ $service->description }}</textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary me-2" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
