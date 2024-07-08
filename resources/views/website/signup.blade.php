@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/signup.css') }}" />
@endPush('head')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (Session::has('signup_success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('signup_success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('signup') }}" class="forms">
                @csrf <!-- CSRF Token -->
                <h1 class="text-center mb-4">Create New Account</h1>
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your Password" required>
                
                <!-- Optional Fields -->
                <input type="text" name="age" class="form-control" placeholder="Age (optional)">
                <input type="text" name="location" class="form-control" placeholder="Location (optional)">
                <input type="text" name="blood_type" class="form-control" placeholder="Blood Type (optional)">
                
                <button type="submit" class="btn btn-block" id="bttn1">Create Account</button>
                <div class="text-center pt-3">
                    <p>Already have an account? <a href="{{ route('login') }}" id="bttn2">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
