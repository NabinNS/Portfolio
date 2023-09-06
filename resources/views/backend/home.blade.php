@extends('backend.layout')

@section('styles')
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">


            <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-outline-primary mr-4" id="profileButton">Profile</button>
                <button class="btn btn-outline-secondary" id="serviceButton">Service</button>
            </div>

            <div class="card shadow-lg" id="homeSetting">

                <div class="card-header text-center bg-secondary text-white">
                    <h4>Home Setting</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top" style="height: 400px; width: 400px;"
                                src="{{ asset('images/shraddha-home.png') }}" alt="Home Image">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <form method="POST" action="{{ route('admin.updatehome') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="imageUpload" class="form-label">Home Image:</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="imageUpload" name="profilephoto">

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="write about yourself"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary me-2" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card shadow-lg" style="display: none" id="servicesSetting">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Services Setting</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h4 class="mb-4 pb-2 border-bottom border-primary">Existing Services</h4>
                            <ul class="list-unstyled">
                                <li>Yeti</li>
                                <li>Podcast</li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <form method="POST" action="{{ route('admin.addservice') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="imageUpload" class="form-label">Logo:</label>
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
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#profileButton").click(function() {
                $("#homeSetting").show();
                $("#servicesSetting").hide();
            });

            $("#serviceButton").click(function() {
                $("#homeSetting").hide();
                $("#servicesSetting").show();
            });
        });
    </script>
@endsection
