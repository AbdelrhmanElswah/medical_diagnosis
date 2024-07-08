<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctorna</title>
    <link rel="stylesheet" href="{{ asset('website/css/contactus.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container-fluid vh-100">
      <div class="row flex-nowrap vh-100">
        <div
          class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 vh-100 sidebar"
          style="background-color: #acd9d1; height: 100%"
        >
          <div
            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
          >
            <div>
              <a
                href="/"
                class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"
              >
                <img
                  src="{{ asset('website/img/2536-removebg-preview (2).png') }}"
                  alt="logo"
                  style="width: 50px"
                />
                <span class="fs-5 d-none d-sm-inline">Doctorna</span>
              </a>
            </div>
            <ul
              class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
              id="menu"
            >
              <li class="nav-item">
                <a href="/" class="nav-link align-middle px-0 text-white">
                  <i class="fa-solid fa-house"></i>
                  <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0 text-white pt-4">
                  <i class="fa-solid fa-gauge-high"></i>
                  <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('history') }}" class="nav-link align-middle px-0 text-white pt-4">
                  <i class="fa-solid fa-file-waveform"></i>
                  <span class="ms-1 d-none d-sm-inline">Medical History</span>
                </a>
              </li>
              <li>
                <a href="{{route('contact-us')}}" class="nav-link px-0 align-middle text-dark pt-4">
                  <i class="fa-solid fa-message"></i>
                  <span class="ms-1 d-none d-sm-inline">Contact Us</span>
                </a>
              </li>
              <hr />
              <div class="dropdown pb-5">
                <a
                  href="#"
                  class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                  id="dropdownUser1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{ asset('website/img/photo-handsome-unshaven-guy-looks-with-pleasant-expression-directly-camera.jpg') }}"
                    alt="hugenerd"
                    width="30"
                    height="30"
                    class="rounded-circle"
                  />
                  <span class="d-none d-sm-inline mx-1">Username</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-user"></i> Profile
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="signout-url-here">
                      <i class="fa-solid fa-sign-out-alt"></i> Sign Out
                    </a>
                  </li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
        <div class="col py-3 content">
          <!-- Add your content here -->
          <section class="bg-light py-3 py-md-5">
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
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
              <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-9">
                  <div
                    class="bg-white border rounded shadow-sm overflow-hidden"
                  >
                  <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                        @if(Session::has('success'))
                           <div class="alert alert-success">
                            {{ Session::get('success') }}
                           </div>
                         @endif
                      <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                          <label for="fullname" class="form-label"
                            >Full Name <span class="text-danger">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="fullname"
                            name="fullname"
                            value=""
                            required
                          />
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="email" class="form-label"
                            >Email <span class="text-danger">*</span></label
                          >
                          <div class="input-group">
                            <span class="input-group-text">
                              <i class="fa-regular fa-envelope"></i>
                            </span>
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              value=""
                              required
                            />
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="phone" class="form-label"
                            >Phone Number</label
                          >
                          <div class="input-group">
                            <span class="input-group-text"
                              ><i class="fa-solid fa-phone"></i>
                            </span>
                            <input
                              type="tel"
                              class="form-control"
                              id="phone"
                              name="phone"
                              value=""
                            />
                          </div>
                        </div>
                        <div class="col-12">
                          <label for="message" class="form-label"
                            >Message <span class="text-danger">*</span></label
                          >
                          <textarea
                            class="form-control"
                            id="message"
                            name="message"
                            rows="3"
                            required
                          ></textarea>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button
                              class="btn btn-lg"
                              type="submit"
                              style="background-color: #acd9d1"
                            >
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
        </div>
      </div>
    </div>
  </body>
</html>
