<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctorna</title>
    <link rel="stylesheet" href="test.css" />
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
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
      }
      .container-fluid {
        display: flex;
        flex-direction: column;
        height: 100%;
      }
      .row.flex-nowrap {
        flex: 1;
        display: flex;
        flex-wrap: nowrap;
      }
      .sidebar {
        background-color: #acd9d1;
        width: 17%;
        flex-shrink: 0;
      }
      .content {
        padding: 1rem;
        flex: 1;
        overflow-y: auto;
      }
      .card-body {
        text-align: center;
      }
      .card {
        width: 100%;
      }
      .col-sm-3,
      .col-md-3,
      .col-lg-3 {
        flex: 1;
      }

      .cropped-profile-picture {
    width: 50px; /* Desired fixed width */
    height: 50px; /* Desired fixed height */
    object-fit: cover; /* Crop the image to cover its container */
    object-position: center; /* Center the image within its container */
    border-radius: 50%; /* Ensure a circular shape if the image is square */
}

    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto sidebar">
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
                <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0 text-dark pt-4">
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
                <a href="{{route('contact-us')}}" class="nav-link px-0 align-middle text-white pt-4">
                  <i class="fa-solid fa-message"></i>
                  <span class="ms-1 d-none d-sm-inline">Contact Us</span></a
                >
              </li>
              <div class="dropdown pb-4 pt-4">
                <a
                  href="#"
                  class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                  id="dropdownUser1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <img id="navProfilePicture" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" class="rounded-circle cropped-profile-picture" alt="Avatar" />
                <span class="d-none d-sm-inline mx-1">{{ $user->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                  <li>
                    <a class="dropdown-item" href="{{ route('edit.profile') }}">
                      <i class="fa-solid fa-user"></i> Profile
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fa-solid fa-right-from-bracket"></i> Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                    </a>
                  </li>
                </ul>
              </div>
            </ul>
            <hr style="color: white" />
          </div>
        </div>
        <div class="col py-3 content">
          <!-- Add your content here -->
          <section style="width: 100%">
            <div class="row pt-5 px-1">
              <div class="col-sm-3 col-md-3 col-lg-3 mb-2 mb-sm-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Name</h4>
                    <h5 class="card-text">{{ $user->name }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 mb-2 mb-sm-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Age</h4>
                    <h5 class="card-text">{{ $user->age ?? 'N/A' }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 mb-2 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blood Type</h4>
                        <h5 class="card-text">{{ $user->blood_type ?? 'N/A' }}</h5>
                    </div>
                </div>
            </div>            
              <div class="col-sm-3 col-md-3 col-lg-3 mb-2 mb-sm-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Location</h4>
                    <h5 class="card-text">{{ $user->location ?? 'N/A' }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col py-3">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);
              
                  function drawChart() {
                      // Ensure the container element exists
                      var container = document.getElementById('chart_div');
                      if (!container) {
                          console.error('Container is not defined');
                          return;
                      }
              
                      var data = google.visualization.arrayToDataTable(@json($chartData));
              
                      var options = {
                          title: 'Checkup History',
                          pieHole: 0.4,
                      };
              
                      var chart = new google.visualization.PieChart(container);
                      chart.draw(data, options);
                  }
              </script>
              <div id="chart_div" style="width: 40%; height: 300px"></div>
            </div>
            <div class="col py-3">
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
          </section>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable({
          paging: false,
          searching: false,
          info: false,
        });
      });
    </script>
  </body>
</html>
