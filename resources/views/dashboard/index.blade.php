@extends('layouts.dashboard')

@push('head')
@endpush

@section('title', 'Home')

@section('content')
<section class="pt-5">
    <div class="container">
        <!-- User Information Section -->
        <div class="row mb-4">
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Name</h4>
                        <h5 class="card-text">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Age</h4>
                        <h5 class="card-text">{{ $user->age ?? 'N/A' }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Blood Type</h4>
                        <h5 class="card-text">{{ $user->blood_type ?? 'N/A' }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Location</h4>
                        <h5 class="card-text">{{ $user->location ?? 'N/A' }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Statistics Section -->
        <div class="row mb-4">
            <div class="col-12 col-md-6  mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Most Used Model</h4>
                        <h5 class="card-text">{{ $mostUsedModel }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6  mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title">Latest Model Used</h4>
                        <h5 class="card-text">{{ $latestModelUsed }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkup History Chart Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Checkup History</h4>
                        <div class="chart-container">
                            <div id="chart_div"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical History Table Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h4 class="mb-3">Latest 3 Medical Histories</h4>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historyData as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->category }}</td>
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->result }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $("#example").DataTable({
            paging: false,
            searching: false,
            info: false,
        });
    });
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(@json($chartData));
        var options = {
            title: 'Checkup History',
            pieHole: 0.4,
            width: '100%',
            height: '100%',
            chartArea: { width: '100%', height: '100%' },
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

    // Redraw the chart when the window is resized
    $(window).resize(function(){
        drawChart();
    });
</script>
@endpush
