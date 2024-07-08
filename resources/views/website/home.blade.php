@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />
@endpush
@section('content')
    <section class="home-sec-1 pt-5" style="background-image: url('{{ asset('website/img/hero-bg-2.png') }}');background-color:white; background-size: cover; background-position: center;">
        <h1 class="text-center ">
            Welcome to Doctorna Medical AI Platform
        </h1>
        <img src="{{ asset('website/img/5242290-removebg.png') }}" class="img-fluid mx-auto d-block" alt="main image" />
    </section>
    
    <section class="home-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="bg-holder bg-size" style="background-image:url(website/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
                    </div>
                    <h1 class="text-center">Our Focus</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center">
                            <a class="text-decoration-none" href="#!">
                                <img class="mb-3 focus-icon" src="{{ asset('website/img/icons/neurology.png') }}" alt="Neurology" />
                                <img class="mb-3 focus-icon-hover" src="{{ asset('website/img/icons/neurology.svg') }}" alt="Neurology" />
                                <p class="fs-1 fs-xxl-2 icon-text text-center">Brain Scans</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center">
                            <a class="text-decoration-none" href="#!">
                                <img class="mb-3 focus-icon" src="{{ asset('website/img/icons/eye-care.png') }}" alt="Eye care" />
                                <img class="mb-3 focus-icon-hover" src="{{ asset('website/img/icons/eye-care.svg') }}" alt="Eye care" />
                                <p class="fs-1 fs-xxl-2 icon-text text-center">Eye Scans</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center">
                            <a class="text-decoration-none " href="#!">
                                <img class="mb-3 focus-icon" src="{{ asset('website/img/icons/cardiac.png') }}" alt="Cardiac care" />
                                <img class="mb-3 focus-icon-hover" src="{{ asset('website/img/icons/cardiac.svg') }}" alt="Cardiac care" />
                                <p class="fs-1 fs-xxl-2 icon-text text-center">Chest Scans</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @guest
    <section class="home-sec-3 py-5">
        <h1 class="text-center" id="text2">Sign Up and Get</h1>
        <div class="container text-center pt-5 special-services-container">
            <div class="row">
                <div class="col">
                    <div class="card h-100">
                        <h4 class="card-header">
                            <i class="fa-solid fa-stethoscope"></i> <span>Customized experience</span>
                        </h4>
                        <div class="card-body">
                            <p class="card-text">
                                Gain access to customized content, personalized recommendations, and exclusive features designed just for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <h4 class="card-header">
                            <i class="fa-solid fa-user-doctor"></i> <span>Doctors recommendation</span>
                        </h4>
                        <div class="card-body">
                            <p class="card-text">
                                Our Nearby Doctors Recommendation feature leverages advanced algorithms to connect users with qualified healthcare.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <h4 class="card-header">
                            <i class="fa-solid fa-clock-rotate-left"></i><span>Medical history management</span>
                        </h4>
                        <div class="card-body">
                            <p class="card-text">
                                Our medical history management feature empowers users to securely store and manage their health information online. By creating a personalized profile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endguest
    
    <section class="pt-5 home-sec-4" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-holder bg-size" style="background-image:url(website/img/about-us.png);background-position:top center;background-size:contain;">
                    </div>
                    <h1 class="text-center">ABOUT US</h1>
                </div>
            </div>
        </div>
        <div class="bg-holder bg-size" style="background-image:url(website/img/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-lg-1 mb-5 mb-lg-0 d-flex"><img class="mx-auto fit-cover rounded-circle w-75" src="{{ asset('website/img/about-1.jpg') }}" alt="..." /></div>
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold mb-4">Enhancing Patient Care with Advanced AI</h2>
                    <p>
                        Welcome to our AI-powered medical platform, where advanced technology meets exceptional care. 
                        Our system leverages cutting-edge artificial intelligence to assist in the diagnosis of brain CT scans, 
                        chest X-rays, and chronic eye conditions. Our goal is to provide accurate, efficient, and accessible healthcare 
                        solutions to everyone, whether you're in a clinic or the comfort of your home.
                    </p>
                    <p>
                        Our platform is designed to support healthcare professionals by offering precise diagnostic tools, 
                        enabling quicker and more accurate diagnoses. With our AI-driven insights, we aim to improve patient outcomes 
                        and streamline the healthcare process, ensuring you receive the best possible care.
                    </p>
                    <div class="py-3">
                        <a class="btn btn-lg btn-outline-primary text-dark rounded-pill try-now" type="submit" href=" {{route('service.index')}}">Try Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 home-sec-5">
        <div class="bg-holder bg-size" style="background-image:url('{{ asset('website/img/people-bg-1.png') }}');background-position:center;background-size:cover;"></div>
        <h1 class="text-center text-light mb-5"> People Love Us</h1>
        <div class="container">
            <div class="row align-items-center offset-sm-1">
                <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($reviews as $review)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
                                <div class="row h-100">
                                    <div class="col-sm-3 text-center">
                                        <img src="{{ asset('website/img/user-icon.png') }}" width="100" alt="" />
                                        <h5 class="mt-3 fw-medium ">{{ $review->name }}</h5>
                                        <p class="fw-normal mb-0">{{ $review->role }}</p>
                                    </div>
                                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                                        <h2>Fantastic Response!</h2>
                                        <div class="my-2">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $review->rating)
                                                    <i class="fas fa-star text-warning me-2"></i>
                                                @else
                                                    <i class="far fa-star text-warning me-2"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p>{{ $review->review }}</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="position-relative z-index-2 mt-5">
                            <ol class="carousel-indicators">
                                @foreach ($reviews as $index => $review)
                                    <li class="{{ $index === 0 ? 'active' : '' }}" data-bs-target="#carouselPeople" data-bs-slide-to="{{ $index }}"></li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                    @auth
                      <div class="rev-butt">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#reviewModal">Write Your Review</a>
                      </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-6 py-5" style="background-image: url('http://localhost:8000/website/img/people-bg.png');background-color:white; background-size: cover; background-position: center;">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <h1 class="text-center">News & Events</h1>
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" src="{{ asset('website/img/covid-19.png') }}" alt="news" />
                        <div class="card-body">
                            <span class="fs--1 text-dark me-3">Health</span>
                            <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"></path>
                            </svg>
                            <span class="fs--1 text-900">Apr 21, 2024</span>
                            <h5 class="font-base fs-lg-0 fs-xl-1 my-3">COVID-19: The Most Up-to-Date Information</h5>
                            <a class="stretched-link text-dark" href="#!">Read full article</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" src="{{ asset('website/img/laboratories.png') }}" alt="news" />
                        <div class="card-body">
                            <span class="fs--1 text-dark me-3">Lifestyle</span>
                            <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"></path>
                            </svg>
                            <span class="fs--1 text-900">Nov 25, 2023</span>
                            <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Importance of Accreditation for Laboratories</h5>
                            <a class="stretched-link text-dark" href="#!">Read full article</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" src="{{ asset('website/img/nicotine.png') }}" alt="news" />
                        <div class="card-body">
                            <span class="fs--1 text-dark me-3">Health</span>
                            <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"></path>
                            </svg>
                            <span class="fs--1 text-900">Nov 28, 2022</span>
                            <h5 class="font-base fs-lg-0 fs-xl-1 my-3">The dangers of nicotine are addressed in depth</h5>
                            <a class="stretched-link text-dark" href="#!">Read full article</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" src="{{ asset('website/img/treatment.png') }}" alt="news" />
                        <div class="card-body">
                            <span class="fs--1 text-dark me-3">Health</span>
                            <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"></path>
                            </svg>
                            <span class="fs--1 text-900">Nov 30, 2023</span>
                            <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Treatment of patients with diabetes during COVID-19</h5>
                            <a class="stretched-link text-dark" href="#!">Read full article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="review-form">
                        @csrf
                        <div class="mb-3">
                            <label for="review-text" class="form-label">Review:</label>
                            <textarea class="form-control" id="review-text" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="review-role" class="form-label">Role:</label>
                            <input type="text" class="form-control" id="review-role">
                        </div>
                        <div class="mb-3">
                            <label for="review-stars" class="form-label">Rating:</label>
                            <div id="review-stars" class="d-flex">
                                <i class="far fa-star" data-value="1"></i>
                                <i class="far fa-star" data-value="2"></i>
                                <i class="far fa-star" data-value="3"></i>
                                <i class="far fa-star" data-value="4"></i>
                                <i class="far fa-star" data-value="5"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit-review">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('#review-stars i');
            let selectedRating = 0;

            stars.forEach(star => {
                star.addEventListener('click', function () {
                    selectedRating = this.getAttribute('data-value');
                    stars.forEach(s => s.classList.remove('fas'));
                    stars.forEach(s => s.classList.add('far'));
                    for (let i = 0; i < selectedRating; i++) {
                        stars[i].classList.remove('far');
                        stars[i].classList.add('fas');
                    }
                });
            });

            document.getElementById('submit-review').addEventListener('click', function () {
                const reviewText = document.getElementById('review-text').value;
                const reviewRole = document.getElementById('review-role').value;

                if (reviewText === '' || reviewRole === '' || selectedRating === 0) {
                    alert('Please provide a review, role, and select a rating.');
                    return;
                }

                fetch('{{ route('submit.review') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        review: reviewText,
                        role: reviewRole,
                        rating: selectedRating
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
@endsection
