<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medical History</title>
    <link rel="stylesheet" href="{{ asset('website/css/history.css') }}" />
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
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"
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
                <img src="{{ asset('website/img/2536-removebg-preview (2).PNG ') }}" alt="logo" style="width: 50px" />
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
                <a href="{{ route('history') }}" class="nav-link align-middle px-0 text-dark pt-4">
                  <i class="fa-solid fa-file-waveform"></i>
                  <span class="ms-1 d-none d-sm-inline">Medical History</span>
                </a>
              </li>
              <li>
                <a href="{{route('contact-us')}}" class="nav-link px-0 align-middle text-white pt-4">
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
                    <a class="dropdown-item" href="#"
                      ><i class="fa-solid fa-user"></i> Profile</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fa-solid fa-right-from-bracket"></i> Sign
                      Out</a
                    >
                  </li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
        <!-- Data Table -->
        <div class="col py-3 content">
          <section class="content">
            <div class="container mt-4">
              <h2>Your Medical History</h2>
              <div class="table-responsive">
                <table
                  id="example"
                  class="display table table-striped table-bordered w-100"
                >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Date</th>
                      <th>Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i =0?>
                    @foreach($historyData as $data)
                    <?php $i++?>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->result }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
  </body>
</html>
