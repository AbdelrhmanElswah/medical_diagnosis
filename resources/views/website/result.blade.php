@extends('layouts.app')
@section('content')
<!-- Main page -->
<div class="container col-lg-6 col-md-8 col-sm-10 col-xs-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body text-center">
            <!-- Conditional Icon and Message -->
            @if ($result['data']['class'] === 'normal')
                <div class="mb-3">
                    <i class="fas fa-check-circle text-success" style="font-size: 6rem;"></i>
                    <p class="text-success" style="font-size: 1.5rem; font-weight: bold;">You are in good health! No abnormalities detected.</p>
                </div>
            @else
                <div class="mb-3">
                    <i class="fas fa-exclamation-circle text-danger" style="font-size: 6rem;"></i>
                    <p class="text-danger" style="font-size: 1.5rem; font-weight: bold;">Attention needed: {{ $formattedClassName }} detected.</p>
                </div>
            @endif

            <p class="text-muted" style="font-size: 1rem;">Consult a healthcare professional for further evaluation.</p>

            <hr>

            <!-- Dynamic Image Tag -->
            <img id="result-image" src="{{ $uploadedImageUrl }}" class="result-image d-block mx-auto my-4" alt="Checkup Image" style="max-width: 100%; height: auto;">

            <h5 class="card-title mt-4">
                <i class="fas fa-notes-medical"></i> Diagnosis
            </h5>
            <p class="card-text">Diagnose Result: <strong id="diagnosis-result">{{ $formattedClassName }}</strong></p>
            <p class="card-text">Class probability: <strong>{{ $result['data']['percentage'] }}%</strong></p>

            <hr>

            <div class="additional-info text-left mt-4">
                <p>{!! $description['description'] !!}</p>
                <p>If you have any concerns or symptoms, please consult with a healthcare professional for further evaluation and advice. Regular check-ups are important for maintaining good health.</p>
            </div>

            <div class="btn-group my-4" role="group" aria-label="Action buttons">
                <a href="{{ route('upload.' . $type) }}" class="btn btn-secondary">
                    <i class="fas fa-redo-alt"></i> Try Another Image
                </a>
                <a href="{{ route('service.index') }}" class="btn btn-info">
                    <i class="fas fa-robot"></i> Try Another Model
                </a>
                <button type="button" class="btn btn-success">
                    <i class="fas fa-user-md"></i> Check Nearby Doctors
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
