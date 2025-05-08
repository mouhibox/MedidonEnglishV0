@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Change Password</h1>
            <hr>
            @include('__inc/alert')
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <div class="mb-3">
                    <label>Current Password</label>
                    <input type="password" name="current_password" class="form-control" required>
                    @error('current_password')
                    <div>{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>New Password</label>
                    <input type="password" name="new_password" class="form-control" required>
                    @error('new_password')
                    <div>{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Change Password</button>
            </form>
        </div>
    </div>
@endsection
