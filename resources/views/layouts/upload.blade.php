<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('website/css/uploadStyle.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/css/user.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <script src="{{asset('upload.js')}}"></script>
  <!-- ------------------------------------------------ -->
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img
            src="{{asset('website/img/Screenshot 2023-12-31 174454 1.png')}}"
            width="120px"
            alt="logo"
        /></a>
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
              <a class="nav-link" href={{route('home')}}>Home</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="service (2).html">Our Services</a>
            </li>
            @if(auth()->check())
            <li class="nav-item me-5">
              <a class="nav-link" href="#" id="but1">Your Dashboard </a>
            </li>
            <li class="nav-item me-5">
              <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 50px;"
              alt="Avatar" />
              <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" type="button">My Account</a></li>
                  <li><a class="dropdown-item" type="button">Edit Profile</a></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
                </ul>
              </div>
              </li>
              @else
            <li class="nav-item me-5 pb-3">
              <a class="nav-link" href="{{route('signup')}}" id="but">Sign Up </a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="{{route('login')}}" id="but1">Login </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="upload-container">
        <h2>Upload Picture</h2>
        <p>Upload the picture you want to check:</p>
        <div class="upload">
          <label for="input-file" id="drop-area">
            <input type="file" accept="image/*" id="input-file" hidden />
            <div id="img-view">
              <img src="{{asset('website/img/upload.jpg')}}" />
              <p>
                Drag and drop or click here <br />
                to upload image
              </p>
            </div>
          </label>
        </div>
      </div>
      <div>
        <button id="check-button" hidden>Check</button>
      </div>
    </main>
    <script src="{{asset('website/js/upload.js')}}"></script>
  </body>
</html>
