@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">

            <div class="card shadow-lg" id="homeSetting">

                <div class="card-header text-center text-white" style=" background: #800000;">
                    <h4>Setting</h4>
                </div>
                <form action="{{ route('admin.updatedetails') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" readonly
                                    value="Shraddha Shrestha">
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    value="{{ optional($detail)->address }}">
                            </div>
                            <div class="col-md-6">
                                <label for="number" class="form-label">Number:</label>
                                <input type="number" class="form-control" name="number" id="number"
                                    value="{{ optional($detail)->number }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ optional($detail)->email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook Link:</label>
                                <input type="text" class="form-control" name="facebook" id="facebook"
                                    value="{{ optional($detail)->facebook }}">
                            </div>
                            <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram Link:</label>
                                <input type="text" class="form-control" name="instagram" id="instagram"
                                    value="{{ optional($detail)->instagram }}">
                            </div>
                            <div class="col-md-6">
                                <label for="youtube" class="form-label">YouTube Link:</label>
                                <input type="text" class="form-control" name="youtube" id="youtube"
                                    value="{{ optional($detail)->youtube }}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
