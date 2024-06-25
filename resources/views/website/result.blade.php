@extends('layouts.app')
@section('content')
<!-- Main page -->
<div class="container col-lg-5 col-md-8 col-sm-12 col-xs-12" style="margin-top: 150px">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-x-ray"></i> Scan Result
        </div>
        <div class="card-body">
            <!-- Dynamic Image Tag -->
            <img id="result-image" src="{{ $uploadedImageUrl }}" class="result-image d-block mx-auto" alt="Checkup Image">
            <h5 class="card-title">
                <i class="fas fa-notes-medical"></i> Diagnosis
            </h5>
            <p class="card-text">Diagnose Result: <strong id="diagnosis-result">{{ $result['data']['1st_prediction']['class_name'] }}</strong></p>
            <p class="card-text">Accuracy: <strong>{{ $result['data']['1st_prediction']['percent'] }}</strong></p>
            <div class="additional-info">
                <p>
                    This X-ray scan shows a healthy lung with no signs of abnormalities. The AI model has analyzed the scan and determined that there are no indications of lung disease or other issues.
                </p>
                <p>
                    If you have any concerns or symptoms, please consult with a healthcare professional for further evaluation and advice. Regular check-ups are important for maintaining good health.
                </p>
            </div>
            <div class="btn-gr" role="group" aria-label="Action buttons">
                <button type="button" class="btn btn-secondary">
                    <i class="fas fa-redo-alt"></i> Check Again
                   
                </button>
                <button type="button" class="btn btn-success">
                    <i class="fas fa-user-md"></i> Check Nearby Doctors
                </button>
                <button type="button" class="btn btn-info">
                    <i class="fas fa-robot"></i> Try Another Model
                    
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
