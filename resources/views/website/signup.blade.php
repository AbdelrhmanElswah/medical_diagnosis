<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Doctorna - Create New Account</title>
  <link rel="stylesheet" href="{{ asset('website/css/signup.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('website/img/Screenshot 2023-12-31 174454 1.png') }}" width="120px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav fs-5 ms-auto">
            <li class="nav-item me-5">
              <a class="nav-link active" href="">Home</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="">Our Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <h1 class="text-center pt-5 text-light">Create New Account</h1>
    <form method="POST" action="{{ route('signup') }}" class="forms col-md-6 mx-auto">
      @csrf <!-- CSRF Token -->
      <div class="pb-4">
        <input type="text" name="name" class="form-control text-center" aria-describedby="nameHelp" placeholder="Your Name">
      </div>
      <div class="pb-4">
        <input type="email" name="email" class="form-control text-center" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="pb-4">
        <input type="password" name="password" class="form-control text-center" placeholder="Password">
      </div>
      <div class="pb-4">
        <input type="password" name="password_confirmation" class="form-control text-center" placeholder="Confirm your Password">
      </div>
      <div class="container text-center">
        <button type="submit" class="btn" id="bttn1">Create Account</button>
      </div>
    </form>
    <h5 class="text-center pt-5">Already have an account?</h5>
    <div class="container text-center">
      <button type="button" class="btn" id="bttn2" onclick="window.location.href='{{ route('login') }}'">Login</button>
    </div>
  </main>
</body>
</html>
