@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('website/css/uploadStyle.css') }}" />
@endPush

@section('content')
<main class="pt-5 pb-5">
    <div class="upload-container py-5">
        <h2>{{ $title }}</h2>
        <p>Upload the picture you want to diagnose:</p>
        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="upload">
                <label for="input-file" id="drop-area">
                    <input type="file" accept="image/*" id="input-file" name="file" required hidden />
                    <div id="img-view">
                        <img src="{{ asset('website/img/upload.jpg') }}" alt="Upload placeholder">
                        <p>Drag and drop or click here <br> to upload image</p>
                    </div>
                </label>
            </div>
            <p class="image-requirements">{{ $requirements }}</p>
            <p class="warning">{{ $warning }}</p>
            <div>
            <button type="submit" id="check-button">Start Diagnosis</button>
            </div>
        </form>
    </div>
</main>
<script src="{{ asset('website/js/upload.js') }}"></script>
@endsection
