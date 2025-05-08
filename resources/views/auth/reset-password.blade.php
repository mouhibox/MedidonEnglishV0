@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Reset Password</h1>
            <hr>
            @include('__inc/alert')
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label>Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
@endsection
