@extends('layouts.dashboard')

@section('title', 'Contact Us')

@push('head')
<link rel="stylesheet" href="{{ asset('website/css/contactus.css') }}">
@endpush

@section('content')
<section class="bg-light pt-2 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <h2 class="mb-4 display-5 text-center">Contact</h2>
                <p class="text-secondary mb-4 text-center">
                    The best way to contact us is to use our contact form below.
                    Please fill out all of the required fields and we will get
                    back to you as soon as possible.
                </p>
                <hr class="w-50 mx-auto mb-3 mb-xl-9 border-dark-subtle" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="bg-white border rounded shadow-sm overflow-hidden">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        @if(Session::has('success'))
                           <div class="alert alert-success">
                            {{ Session::get('success') }}
                           </div>
                         @endif
                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                            <div class="col-12">
                                <label for="fullname" class="form-label">
                                    Full Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="" required />
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label">
                                    Email <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" value="" required />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone" class="form-label">
                                    Phone Number
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">
                                    Message <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-lg" type="submit" style="background-color: #acd9d1">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
