<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Doctorna</title>
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <style>
  </style>
    <link href="{{ asset('https://getbootstrap.com/docs/5.3/assets/css/docs.css')}}" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"
        ><img src="{{ asset('website/img/Screenshot 2023-12-31 174454 1.png') }}" width="120px" alt="logo" />
      </a>
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
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#ccc">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#ccc">Contact Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link active" href="service.html">Our Services</a>
          </li>
          <li class="nav-item me-5 pb-3">
            <a class="nav-link" href="signup.html" id="but">Sign Up </a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="{{ route('login') }}" id="but1">Login </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</main>


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

      <div class="container text-center pt-5">
        <div class="row">
          <div class="col">
            <div class="card h-100">
              <h4 class="card-header">
                <i class="fa-solid fa-stethoscope"></i> Customized experience
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
                <i class="fa-solid fa-user-doctor"></i> Doctors recommendation
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
                <i class="fa-solid fa-clock-rotate-left"></i> Medical history
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
    <div class="container my-5 text-center" id="zz">
      
    <footer class="text-center text-lg-start text-light">
      <section
        class="d-flex justify-content-between p-4 text-white"
      ></section>
      <section class="">
        <div class="container text-center text-md-start mt-5 text-light">
          <div class="row mt-3">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Support</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 4px"
              />
              <p id="ff">
                <a href="#!" class="text-light" style="text-decoration: none"
                  >FAQS</a
                >
              </p id="ff">
              <p id="ff">
                <a href="#!" class="text-light" style="text-decoration: none"
                  >Privcy Policy</a
                >
              </p>
              <p id="ff">
                <a href="#!" class="text-light" style="text-decoration: none"
                  >Terms & Conditions</a
                >
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Services</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 4px"
              />
              <p id="ff">
                <a href="upload.html" class="text-light" style="text-decoration: none"
                  >Brain Tumor Detection
                </a>
              </p>
              <p id="ff">
                <a href="upload.html" class="text-light" style="text-decoration: none"
                  >Chest Disease Identification</a
                >
              </p>
              <p id="ff">
                <a href="upload.html" class="text-light" style="text-decoration: none"
                  >Eye Disease Diagnosis:
                </a>
              </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 4px"
              />
              <p ><i class="fas fa-home mr-3"></i> Portsaid,Egypt</p>
              <p><i class="fas fa-envelope mr-3"></i> Doctorna@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Follow Us</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 4px"
              />
              <p >
                <a href="#" 
                  ><i class="fab fa-facebook-f text-light pe-3"></i
                ></a>
                <a href="#"
                  ><i class="fab fa-instagram text-light pe-3"></i
                ></a>
                <a href="#"
                  ><i class="fab fa-linkedin-in text-light pe-3"></i
                ></a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>

  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
