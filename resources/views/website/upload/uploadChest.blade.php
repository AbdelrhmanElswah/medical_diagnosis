@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('website/css/uploadStyle.css') }}" />
@endPush('head')
@section('content')

    <main>
        <div class="upload-container">
            <h2>Upload Picture</h2>
            <p>Upload the picture you want to check:</p>
            <form action="{{ route('chest') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="upload">
                    <label for="input-file" id="drop-area">
                        <input type="file" accept="image/*" id="input-file" name="file" required hidden />
                        <div id="img-view">
                            <img src="{{ asset('website/img/upload.jpg') }}" />
                            <p>
                                Drag and drop or click here <br />
                                to upload image
                            </p>
                        </div>
                    </label>
                </div>
                <div>
                    <button type="submit" id="check-button">Check</button>
                </div>
            </form>
        </div>
    </main>
    <script src="{{ asset('website/js/upload.js') }}"></script>
@endsection
