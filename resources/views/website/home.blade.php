@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />
@endPush('head')
@section('content')
      <h1 class="text-center text-light" id="text0">
        Your Health , Our Priority
      </h1>
      <img src="{{ asset('website/img/5242290-removebg.png') }}" class="img-fluid mx-auto d-block" alt="main image" />
      <p class="text-center text-light" id="text1">
        Welcome to our website that utilizes the power of artificial
        intelligence (AI) to aid in the detection and diagnosis of brain tumors,
        eye diseases, and chest diseases.Our advanced classification algorithms,
        trained on extensive medical datasets, enable us to provide accurate and
        efficient assessments for these critical health conditions.
      </p>

      <!-- sign up and get  -->

      <div class="container3">
        <h1 class="text-center" id="text2">Sign Up and Get</h1>
      </div>

      <div class="container text-center pt-5 special-services-container ">
        <div class="row">
          <div class="col">
            <div class="card h-100">
              <h4 class="card-header">
                <i class="fa-solid fa-stethoscope"></i> <span >Customized experience</span>
              </h4>

              <div class="card-body">
                <p class="card-text">
                  Gain access to customized content, personalized
                  recommendations, and exclusive features designed just for you.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <h4 class="card-header">
                <i class="fa-solid fa-user-doctor"></i><span>Doctors recommendation</span> 
              </h4>
              <div class="card-body">
                <p class="card-text">
                  Our Nearby Doctors Recommendation feature leverages advanced
                  algorithms to connect users with qualified healthcare
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <h4 class="card-header">
                <i class="fa-solid fa-clock-rotate-left"></i><span>Medical history</span> 
                managment
              </h4>
              <div class="card-body">
                <p class="card-text">
                  Our medical history management feature empowers users to
                  securely store and manage their health information online. By
                  creating a personalized profile.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- -------------------------->
      <h1 class="text-center text-light pb-5" id="news">News & Event</h1>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-60" id="size">
            <img src="{{ asset('website/img/GlioblastomaVaccine-700x467.jpg') }}" class="card-img-top" alt="..." width="10px" />
            <div class="card-body">
              <h5 class="card-title">
                Novel dual-target CAR T cell therapy shows promise in treating
                recurrent glioblastoma
              </h5>
              <div class="newscontainer">
                <a
                  id="newsbttn"
                  href="https://www.news-medical.net/news/20240313/Novel-dual-target-CAR-T-cell-therapy-shows-promise-in-treating-recurrent-glioblastoma.aspx"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-60" id="size">
            <img src="{{ asset('website/img/Image_11-300x200.jpeg') }}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                AI model for detecting ocular disease using retinal images
              </h5>
              <div class="newscontainer">
                <a
                  id="newsbttn"
                  href="https://www.news-medical.net/news/20230918/AI-model-for-detecting-ocular-disease-using-retinal-images.aspx"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-60" id="size">
            <img src="{{ asset('website/img/COPD_radiography.jpg') }}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                Study funded by NIH supports optimal threshold for diagnosing
                COPD
              </h5>
              <div class="newscontainer">
                <a
                  id="newsbttn"
                  href="https://www.nhlbi.nih.gov/news/2019/study-funded-nih-supports-optimal-threshold-diagnosing-copd"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-60" id="size">
            <img src="{{ asset('website/img/covid19image_16x9.jpg') }}" class="card-img-top" alt="..." />

            <div class="card-body">
              <h5 class="card-title">
                Can Doctors Predict The Severity of COVID-19 in Their Patients?
              </h5>
              <div class="newscontainer">
                <a
                  id="newsbttn"
                  href="https://drexel.edu/news/archive/2023/June/Can-Doctors-Predict-The-Severity-of-COVID-19-in-Their-Patients"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- About Us -->
      <div class="card mb-3" style="max-width: 1500px" id="cc">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('website/img/image 2.png') }}" class="img-fluid rounded-start" alt="..." />

          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title ps-5 pt-5" id="ccc">About Us</h4>
              <p class="card-text ps-5 pt-2" id="font">
                Welcome to Doctorna website, your trusted partner in health. We
                specialize in the early detection of brain tumors, eye diseases,
                and chest conditions. Our mission is to revolutionize healthcare
                by providing advanced diagnostic solutions for detecting brain
                tumors, eye diseases, and chest conditions. With precise
                diagnostics and a dedicated team, we aim to provide timely
                insights for proactive healthcare. At Doctorna, we're committed
                to shaping a healthier future for you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  @endsection


