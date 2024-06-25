@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/uploadStyle.css') }}" />
@endPush('head')
@section('content')

    <main>
        <div class="upload-container">
            <h2>Upload Picture</h2>
            <p>Upload the picture you want to diagnose:</p>
            <div class="upload">
                <label for="input-file" id="drop-area">
                    <input type="file" accept="image/*" id="input-file" hidden />
                    <div id="img-view">
                        <img src="{{ asset('website/img/upload.jpg') }}" />
                        <p>
                            Drag and drop or click here <br />
                            to upload image
                        </p>
                    </div>
                </label>
            </div>
        </div>
        <div>
            <button id="check-button" hidden>Check</button>
        </div>
    </main>
    <script src="{{ asset('website/js/upload.js') }}"></script>
@endsection
