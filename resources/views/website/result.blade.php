@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('website/css/result.css') }}" />
@endpush

@section('content')
<div class="results-page py-5">
    <div class="container col-lg-5 col-md-7 col-sm-10 col-xs-12" >
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
                <div class="btn-group-row">

                    <a href="{{ $doctorUrl }}" class="btn btn-custom">
                        <img src="{{ asset('website/img/vezetta_logo_2.png') }}" alt="Doctor Icon" class="button-icon"> Check Nearby Doctors
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
