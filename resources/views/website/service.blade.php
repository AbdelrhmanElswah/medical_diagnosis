<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>Service</title>
    <link rel="stylesheet" href="{{ asset('website/css/service.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <!-- ------------------------------------------------ -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"
        ><img src="{{ asset('website/img/Screenshot 2023-12-31 174454 1.png') }}" width="120px" alt="logo" /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- ms---padding left -->
        <ul class="navbar-nav fs-5 ms-auto">
          <li class="nav-item me-5">
            <a class="nav-link" href="home page.html">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link active" href="service (2).html">Our Services</a>
          </li>
          <li class="nav-item me-5 pb-3">
            <a class="nav-link" href="signup.html" id="but">Sign Up </a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="log.html" id="but1">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
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
              <a href="{{route('upload-brain')}}" class="btn">Try Now !</a>
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
              <a href="{{route('upload-chest')}}" class="btn">Try Now !</a>
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
              <a href="{{route('upload-eye')}}" class="btn">Try Now !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
  </main>
  <body></body>
</html>
