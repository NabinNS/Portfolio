@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
<section class="contact">
    <div class="contact-container">
        <div class="card-header text-center text-white" style=" background: #800000;">
            <h4>Setting</h4>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="col-md-6">
                    <label for="number" class="form-label">Number:</label>
                    <input type="tel" class="form-control" name="number" id="number">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-6">
                    <label for="facebook" class="form-label">Facebook Link:</label>
                    <input type="text" class="form-control" name="facebook" id="facebook">
                </div>
                <div class="col-md-6">
                    <label for="instagram" class="form-label">Instagram Link:</label>
                    <input type="text" class="form-control" name="instagram" id="instagram">
                </div>
                <div class="col-md-6">
                    <label for="youtube" class="form-label">YouTube Link:</label>
                    <input type="text" class="form-control" name="youtube" id="youtube">
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
    </div>
</section>

@endsection
