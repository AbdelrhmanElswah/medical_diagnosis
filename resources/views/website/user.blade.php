@extends('layouts.app')

@section('content')
    <main>
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

      
    </main>
    <!-- reviews -->
    <section>
        <div class="row d-flex justify-content-center" >
          <div class="col-md-10 col-xl-8 text-center pb-5" id="review-text">
            <h3 class="mb-4" >Users Reviews</h3>
            
          </div>
        </div>
      
        <div class="row text-center" id="reviews" >
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Laila Ahmed</h5>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i> acting as my personal AI doctor, provided second opinions that transformed my healthcare approach,
               equipping me with the confidence to make informed decisions.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Hana Ali</h5>
                        <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>The speed and accuracy of the Doctorna AI Health Assistant were truly impressive. 
              It provided me with the confidence I needed to proceed with my treatment.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Ahmed Hesham</h5>
           
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>The second opinion we received from Doctorna AI doctor confirmed my son's diagnosis and helped us better understand his condition. It was an invaluable resource.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-warning"></i>
              </li>
            </ul>
        </div>
      </section>
    <div>
        <div class="rev-butt">
            <a href="">Write Your Review</a>
       </div>
    </div>
  </main>
  @endsection
