@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/login.css') }}" />

@endPush('head')
@section('content')
    <h1 class="text-center text-light" id="text0">Our Services</h1>
    <!-- Brain -->
    <div class="container-fluid d-flex">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-3 col-xs-12">
            <img src="{{asset('website/img/brain 2.jpg')}}" class="card-img" alt="Brain Image" />
          </div>
          <div class="col-md-8 col-xs-6">
            <div class="card-body">
              <h3 class="card-title">Brain Tumor Detection</h3>
              <p class="card-text">
                Our AI-based brain tumor detection system analyzes medical
                imaging scans, such as MRI and swiftly identifies potential
                abnormalities indicative of brain tumors. By leveraging
                sophisticated machine learning techniques, we can assist
                healthcare professionals in the early detection and diagnosis of
                brain tumors, facilitating timely treatment and improved patient
                outcomes.
              </p>
              <a href="{{route('diagnosis.brain')}}" class="btn">Try Now !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <!-- chest -->
    <div class="container-fluid d-flex">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-3 col-xs-12">
            <img src="{{asset('website/img/chest.jpg')}}" class="card-img" alt="Chest Image" />
          </div>
          <div class="col-md-8 col-xs-6">
            <div class="card-body">
              <h3 class="card-title">Chest Disease Identification</h3>
              <p class="card-text">
                Our AI-powered classification system is also designed to
                evaluate chest X-rays and aid in diagnosing various respiratory
                and chest diseases. From identifying lung infections such as
                pneumonia.
              </p>
              <a href="{{route('diagnosis.chest')}}" class="btn">Try Now !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <!-- Eye  -->
    <div class="container-fluid d-flex">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-3 col-xs-12">
            <img src="{{asset('website/img/eye 2.jpg')}}" class="card-img" alt="Eye Image" />
          </div>
          <div class="col-md-8 col-xs-6">
            <div class="card-body">
              <h3 class="card-title">Eye Disease Diagnosis</h3>
              <p class="card-text">
                Through the utilization of AI-driven classification, our website
                offers reliable and rapid assessment of various eye diseases. By
                uploading retinal images, ur system can identify signs of common
                eye conditions, including glaucoma, cataract and diabetic
                retinopathy
              </p>
              <a href="{{route('diagnosis.eye')}}" class="btn">Try Now !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
@endSection
