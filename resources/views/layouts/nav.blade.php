<nav class="navbar navbar-expand-lg navbar-light fixed-top py-1 d-block bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('website/img/logo-2.png') }}" width="120px" alt="logo" />
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
            <a class="nav-link active" href={{route('home')}}>Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="{{ route('home') }}#about">About Us</a>
          </li>          
          <li class="nav-item me-5">
            <a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link " href="{{route('service.index')}}">Our Services</a>
          </li>
          @if(auth()->check())
          <li class="nav-item me-5">
            <a class="nav-link" href="{{ route('dashboard') }}" id="but1">Your Dashboard </a>
          </li>
          <li class="nav-item me-5">
            <img id="navProfilePicture" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" class="rounded-circle cropped-profile-picture" alt="Avatar" />
            <div class="btn-group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('edit.profile') }}">Edit Profile</a></li>
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

  <script src="{{ asset('website/js/uploadphoto.js') }}"></script>
