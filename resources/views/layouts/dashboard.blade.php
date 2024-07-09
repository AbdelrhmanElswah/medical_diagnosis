<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctorna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('website/css/dashboard.css') }}">

    @stack('head')
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <nav class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 d-flex flex-column sidebar align-items-center align-items-sm-start min-vh-100">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 w-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="{{ asset('website/img/2536-removebg-preview (2).png') }}" alt="logo" style="width: 50px"/>
                        <span class="fs-5 d-none d-sm-inline">Doctorna</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link align-middle px-0 text-dark {{ request()->is('/') ? 'active' : '' }}">
                                <i class="fa-solid fa-house"></i>
                                <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0 text-dark pt-4 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <i class="fa-solid fa-gauge-high"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('history') }}" class="nav-link align-middle px-0 text-dark pt-4 {{ request()->routeIs('history') ? 'active' : '' }}">
                                <i class="fa-solid fa-file-waveform"></i>
                                <span class="ms-1 d-none d-sm-inline">Medical History</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}" class="nav-link px-0 align-middle text-dark pt-4 {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                <i class="fa-solid fa-message"></i>
                                <span class="ms-1 d-none d-sm-inline">Contact Us</span>
                            </a>
                        </li>
                        <hr class="w-100"/>
                        <div class="dropdown pb-5">
                            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="{{ route('edit.profile') }}">Edit Profile</a></li>
                                <li><hr class="dropdown-divider"/></li>
                                <li>
                                    <a class="dropdown-item" href="signout-url-here">
                                        <i class="fa-solid fa-sign-out-alt"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </nav>
            <main class="col py-3">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    @stack('scripts')
</body>
</html>
