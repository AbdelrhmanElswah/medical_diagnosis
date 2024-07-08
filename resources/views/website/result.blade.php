@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('website/css/result.css') }}" />
@endpush

@section('content')
<div class="results-page py-5">
    <div class="container col-lg-5 col-md-7 col-sm-10 col-xs-12">
        <div class="card">
            <!-- Card Header with Title and Icon -->
            <div class="card-header">
                <i class="fas fa-diagnoses"></i> Scan Result
            </div>
            <div class="card-body">
                <!-- Second Part: Scan Image First -->
                <div class="scan-image">
                    <img src="{{ $uploadedImageUrl }}" alt="Scan Image" class="img-fluid">
                </div>
                
                <!-- First Part: Result Icon and Status Message -->
                <div class="result-icon-and-message py-1 {{ $result['data']['class'] === 'normal' ? 'success' : 'alert' }}">
                    @if ($result['data']['class'] === 'normal')
                        <i class="fas fa-check-circle icon-success"></i>
                        <p class="status-message">You are in good health!</p>
                    @else
                        <i class="fas fa-exclamation-circle icon-alert"></i>
                        <p class="status-message">{{ $formattedClassName }} detected.</p>
                    @endif
                </div>
                
                <!-- Third Part: Detailed Information -->
                <div class="detailed-info">
                    <h5 class="diagnosis-title" style="width:fit-content;">
                        <i class="fas fa-stethoscope"></i> Diagnosis
                    </h5>
                    <p class="diagnosis-result">Diagnose Result: <strong>{{ $formattedClassName }}</strong></p>
                    <p class="class-probability">Class probability: <strong>{{ $result['data']['percentage'] }}%</strong></p>
                    <p class="description">{!! $description['description'] !!}</p>
                </div>

                <!-- Fourth Part: Action Buttons -->
                <div class="btn-group-row">
                    <a href="{{ route('upload.' . $type) }}" class="btn btn-dark">
                        <i class="fas fa-redo-alt me-2"></i> Try Another Image
                    </a>
                    <a href="{{ route('service.index') }}" class="btn btn-info">
                        <i class="fas fa-sync-alt me-2"></i> Try Another Model
                    </a>
                </div>
                @auth
                <div class="btn-group-row">
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#cityModal">
                        <img src="{{ asset('website/img/vezetta_logo_2.png') }}" alt="Doctor Icon" class="button-icon"> Check Nearby Doctors
                    </button>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="cityModal" tabindex="-1" aria-labelledby="cityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cityModalLabel">Please Enter Your Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="searchCity" class="form-control" placeholder="Search for a city...">
                <ul id="city_menu_options_container_10" class="list-group mt-2 custom-city-list"></ul>
                <nav>
                    <ul class="pagination mt-2"></ul>
                </nav>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="selectCityBtn" class="btn btn-primary">Select</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    let selectedCity = null;
    let currentPage = 1;
    let searchQuery = '';

    function fetchCities(page = 1, search = '') {
        fetch(`/cities?page=${page}&search=${search}`)
            .then(response => response.json())
            .then(data => {
                renderCities(data.cities);
                renderPagination(data.total, data.currentPage, data.perPage);
            });
    }

    function renderCities(cities) {
        const container = document.getElementById('city_menu_options_container_10');
        container.innerHTML = '';
        selectedCity = null; // Reset selected city
        document.querySelectorAll('.city-option').forEach(elem => elem.classList.remove('active')); // Clear active class

        for (const [key, name] of Object.entries(cities)) {
            const li = document.createElement('li');
            li.classList.add('list-group-item', 'city-option');
            li.dataset.value = key;
            li.textContent = name;
            li.addEventListener('click', function () {
                document.querySelectorAll('.city-option').forEach(elem => elem.classList.remove('active'));
                li.classList.add('active');
                selectedCity = li.dataset.value;
                clearErrorMessage(); // Clear error message when a city is selected
            });
            container.appendChild(li);
        }
    }

    function renderPagination(total, currentPage, perPage) {
        const pagination = document.querySelector('.pagination');
        pagination.innerHTML = '';
        const totalPages = Math.ceil(total / perPage);

        for (let page = 1; page <= totalPages; page++) {
            const li = document.createElement('li');
            li.classList.add('page-item', page === currentPage ? 'active' : '');
            const a = document.createElement('a');
            a.classList.add('page-link');
            a.textContent = page;
            a.addEventListener('click', function () {
                fetchCities(page, searchQuery);
            });
            li.appendChild(a);
            pagination.appendChild(li);
        }
    }

    function displayErrorMessage(message) {
        let errorContainer = document.getElementById('cityError');
        if (!errorContainer) {
            errorContainer = document.createElement('div');
            errorContainer.id = 'cityError';
            errorContainer.classList.add('alert', 'alert-danger');
            document.querySelector('.modal-body').appendChild(errorContainer);
        }
        errorContainer.textContent = message;
    }

    function clearErrorMessage() {
        const errorContainer = document.getElementById('cityError');
        if (errorContainer) {
            errorContainer.remove();
        }
    }

    document.getElementById('searchCity').addEventListener('input', function () {
        searchQuery = this.value;
        fetchCities(1, searchQuery);
    });

    document.getElementById('selectCityBtn').addEventListener('click', function () {
        if (selectedCity) {
            let type = "{{ $type }}";
            let doctorUrl = '';

            switch (type) {
                case 'chest':
                    doctorUrl = `https://www.vezeeta.com/en/doctor/chest/${selectedCity}`;
                    break;
                case 'eye':
                    doctorUrl = `https://www.vezeeta.com/en/doctor/ophthalmology/${selectedCity}`;
                    break;
                case 'brain':
                    doctorUrl = `https://www.vezeeta.com/en/doctor/neurology/${selectedCity}`;
                    break;
                default:
                    doctorUrl = `https://www.vezeeta.com/en/doctor/${selectedCity}`;
                    break;
            }

            window.open(doctorUrl, '_blank');
        } else {
            displayErrorMessage('Please select a city.');
        }
    });

    fetchCities();
});

</script>
@endpush
