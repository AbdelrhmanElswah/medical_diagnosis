@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/login.css') }}" />

@endPush('head')
@section('content')
<div class=" container-fluid py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('website/img/image 9.png') }}" alt="login form" class="img-fluid">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3"></i>
                                            <span class="h1 fw-bold mb-0">Login to your account</span>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter your Email" required autofocus>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                        <a class="small text-muted" href="">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2">
                                            Don't have an account?
                                            <a href="{{ route('signup') }}" style="color: #5a6268">Register here</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endSection
