@extends('layouts.app')

@section('content')
@include('__inc/header')
<div class="d-flex justify-content-center py-5 mb-4">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="text-center text-purple mb-4">Change Password</h1>
                <hr>
                @include('__inc/alert')

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="current_password" class="form-label">Current Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Enter current password" required>
                        </div>
                        @error('current_password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password" class="form-label">New Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter new password" required>
                        </div>
                        @error('new_password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" placeholder="Confirm new password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection