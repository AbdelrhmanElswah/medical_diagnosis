@extends('layouts.app')

@push('head')
  <link rel="stylesheet" href="{{ asset('website/css/editprofile.css') }}" />
  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('content')
<main>
  <div class="container-xl px-4 mt-4" id="maincontainer">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
      <a class="nav-link active ms-0" href="{{ route('edit.profile') }}">Profile</a>
      <a class="nav-link" href="{{ route('security') }}">Security</a>
    </nav>
    <hr class="mt-0 mb-4" />
    <!-- Display Validation Errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="row">
      <div class="col-xl-4">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">
            <!-- Profile picture image -->
            <img class="img-account-profile rounded-circle mb-2" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" alt="Profile Picture" id="profilePicture" />
            <!-- Profile picture help block-->
            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
            @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
           </div>
         @endif
            <!-- Profile picture upload form -->
            <form method="POST" action="{{ route('update.profile.picture') }}" enctype="multipart/form-data">
              @csrf
              <!-- Hidden input for profile picture -->
              <input type="file" id="fileInput" name="profile_picture" class="hidden-input" accept="image/*" />
              <!-- Profile picture upload button -->
              <button class="btn" type="button" id="uploadBtn">Upload new image</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
          <div class="card-header">Account Details</div>
          <div class="card-body">
            <!-- Update profile form -->
            <form method="POST" action="{{ route('profile.update') }}">
              @csrf
                @if(Session::has('success'))
                   <div class="alert alert-success">
                   {{ Session::get('success') }}
                  </div>
                @endif
              <!-- Form Group (username)-->
              <div class="mb-3">
                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                <input class="form-control" id="inputUsername" name="name" type="text" value="{{ old('name', $user->name) }}" placeholder="Enter your username" />
              </div>
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (first name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputFirstName">First name</label>
                  <input class="form-control" id="inputFirstName" name="first_name" type="text" value="{{ old('first_name', $user->first_name) }}" placeholder="Enter your first name" />
                </div>
                <!-- Form Group (last name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLastName">Last name</label>
                  <input class="form-control" id="inputLastName" name="last_name" type="text" value="{{ old('last_name', $user->last_name) }}" placeholder="Enter your last name" />
                </div>
              </div>
              <!-- Form Row -->
              <div class="row gx-3 mb-3">
                <!-- Form Group (blood type)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputBloodType">Blood Type</label>
                  <input class="form-control" id="inputBloodType" name="blood_type" type="text" value="{{ old('blood_type', $user->blood_type) }}" placeholder="Enter your blood type" />
                </div>
                <!-- Form Group (age)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputAge">Age</label>
                  <input class="form-control" id="inputAge" name="age" type="number" value="{{ old('age', $user->age) }}" placeholder="Enter your age" />
              </div>
                <!-- Form Group (location)-->
                <div class="mb-3">
                  <label class="small mb-1" for="inputLocation">Location</label>
                  <input class="form-control" id="inputLocation" name="location" type="text" value="{{ old('location', $user->location) }}" placeholder="Enter your location" />
                </div>
              </div>
              <!-- Form Group (email address)-->
              <div class="mb-3">
                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                <input class="form-control" id="inputEmailAddress" name="email" type="email" value="{{ old('email', $user->email) }}" placeholder="Enter your email address" />
              </div>
              <!-- Form Row -->
              <div class="row gx-3 mb-3">
                <!-- Form Group (phone number)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputPhone">Phone number</label>
                  <input class="form-control" id="inputPhone" name="phone" type="tel" value="{{ old('phone', $user->phone) }}" placeholder="Enter your phone number" />
                </div>
                <!-- Form Group (birthday)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputBirthday">Birthday</label>
                  <input class="form-control" id="inputBirthday" name="birthday" type="text" value="{{ old('birthday', $user->birthday ? $user->birthday->format('m/d/Y') : '') }}" placeholder="Enter your birthday" />
                </div>
              </div>
              <!-- Save changes button-->
              <button class="btn" type="submit" style="background-color: #acd9d1">Save changes</button>
            </form>
            <!-- End update profile form -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#inputBirthday", {
    dateFormat: "m/d/Y"
  });
</script>
<script src="{{ asset('website/js/uploadphoto.js') }}"></script>
@endsection
