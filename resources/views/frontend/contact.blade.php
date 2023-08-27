@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
    <section class="contact">
        <div class="contact-container">
            <div class="content">
                <div class="image-box">
                    <img src="{{ asset('images/ContactUs.jpg') }}" alt="Contact Us">
                </div>

                <form action="">
                    <p class="title">Send us a message</p>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Enter your name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Enter your email</label>
                    </div>
                    <div class="message-box">
                        <textarea></textarea>
                        <label for="">Enter your Message</label>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
