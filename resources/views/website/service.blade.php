@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/service.css') }}" />
@endpush
@section('content')
    <div class="service-container py-5 ">
    <h1 class="text-center text-light" id="text0">Our Services</h1>
    <!-- Brain -->
    <div class="container-fluid d-flex service-container">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-3 col-xs-12">
            <img src="{{asset('website/img/brain 2.jpg')}}" class="card-img" alt="Brain Image" />
          </div>
          <div class="col-md-8 col-xs-6">
            <div class="card-body">
              <h3 class="card-title">Brain Tumor Detection</h3>
              <p class="card-text">
                Use our AI-powered system to analyze MRI scans of the brain and swiftly identify potential abnormalities indicative of brain tumors.<br />
                <strong>Input:</strong> MRI scans<br />
                <strong>Output:</strong> One of four categories: glioma tumor, meningioma tumor, pituitary tumor, and normal<br />
              </p>
              <a href="{{route('upload.brain')}}" class="btn">Try Now !</a>
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
                Use our AI-powered system to evaluate chest X-rays and diagnose various respiratory and chest diseases.<br />
                <strong>Input:</strong> Chest X-ray images<br />
                <strong>Output:</strong> One of four categories: COVID-19, lung opacity, normal lungs, and viral pneumonia<br />
              <a href="{{route('upload.chest')}}" class="btn">Try Now !</a>
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
                Use our AI-powered system to provide reliable and rapid assessment of various eye diseases.<br />
                <strong>Input:</strong> Retinal images<br />
                <strong>Output:</strong> One of four categories: cataracts, diabetic retinopathy, glaucoma, and normal eyes<br />
              </p>
              <a href="{{route('upload.eye')}}" class="btn">Try Now !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br />
@endSection
