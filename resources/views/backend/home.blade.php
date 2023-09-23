@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Write about yourself">{{ strip_tags($user->description) }}</textarea>

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
                        <div class="col-md-6 text-center service-list" style="overflow: auto;">
                            <h4 class="mb-4 pb-2 border-bottom border-primary">Existing Services</h4>
                            <ul class="list-unstyled">
                                @foreach ($services as $service)
                                    <li class="d-flex justify-content-around align-items-center">
                                        {{ $service->title }}
                                        <div class="actions">
                                            <a href="{{ route('admin.editservice', $service->id) }}"><i
                                                    class="fas fa-edit text-success"></i></a>
                                            <a href="{{ route('admin.deleteservice', $service->id) }}"><i
                                                    class="fas fa-trash ml-2 text-danger"></i></a>
                                        </div>
                                    </li>
                                    <hr>
                                @endforeach

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
