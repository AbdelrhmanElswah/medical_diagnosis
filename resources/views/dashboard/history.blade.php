@extends('layouts.dashboard')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/history.css') }}" />
@endpush
@section('content')
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

@endsection
@push('scripts')
<script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
@endpush