@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('website/css/security.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/editprofile.css') }}" />
@endpush

@section('content')
    <!-- Main page  -->
    <main>
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link ms-0" href="{{ route('edit.profile') }}" target="__blank">Profile</a>
                <a class="nav-link active" href="{{ route('security') }}" target="__blank">Security</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Change password card-->
                    <div class="card mb-4">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <form method="POST" action="{{ route('profile.changePassword') }}">
                                @csrf
                                <!-- Form Group (current password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="currentPassword">Current Password</label>
                                    <input class="form-control" id="currentPassword" name="current_password" type="password" placeholder="Enter current password" required>
                                    @error('current_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Form Group (new password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="newPassword">New Password</label>
                                    <input class="form-control" id="newPassword" name="new_password" type="password" placeholder="Enter new password" required>
                                    @error('new_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                    <input class="form-control" id="confirmPassword" name="new_password_confirmation" type="password" placeholder="Confirm new password" required>
                                </div>
                                <button class="btn" style="background-color:#ACD9D1;" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- delete account -->
                    <div class="card mb-4">
                        <div class="card-header">Delete Account</div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                            <form method="POST" action="{{ route('profile.deleteAccount') }}">
                                @csrf
                                <button class="btn btn-danger-soft text-danger" type="submit">I understand, delete my account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
