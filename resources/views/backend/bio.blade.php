@extends('backend.layout')

@section('styles')
@endsection
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">


            <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-outline-primary mr-4" id="newBioButton">Add New Bio</button>
                <button class="btn btn-outline-secondary" id="updateBioButton">Update Bio</button>
            </div>
            <div class="card shadow-lg" id="updateBio">

                @foreach ($bios as $bio)
                    <div class="card-header text-center bg-secondary text-white">
                        <h4>Bio Setting</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="card-img-top" style="height: 400px; width: 400px;"
                                    src="{{ asset('images/'.$bio->photoPath) }}" alt="Home Image">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <form method="POST" action="{{ route('admin.updatehome') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="imageUpload" class="form-label">Bio Photo:</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="imageUpload" name="biophoto">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="imageUpload" class="form-label">Title:</label>
                                        <input type="text" class="form-control" name="biotitle" value="{{ $bio->title }}">

                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description:</label>
                                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Write about yourself">{{ strip_tags($bio->description ) }}</textarea>

                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary me-2" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="card shadow-lg" id="newBio" style="display: none">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Add New Bio</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h4 class="mb-4 pb-2 border-bottom border-primary">Existing Bio</h4>
                            <ul class="list-unstyled">
                                @foreach ($bios as $bio)
                                    <li>{{ $bio->title }}</li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <form method="POST" action="{{ route('admin.addservice') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="imageUpload" class="form-label">Bio Photo:</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="imageUpload" name="logo">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary me-2" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                $(document).ready(function() {
                    $("#newBioButton").click(function() {
                        $("#newBio").show();
                        $("#updateBio").hide();
                    });

                    $("#updateBioButton").click(function() {
                        $("#newBio").hide();
                        $("#updateBio").show();
                    });
                });
            </script>
        @endsection
