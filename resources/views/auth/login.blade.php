@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Log In</h1>
            <hr>
            @include('__inc/alert')
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control"
                           placeholder="email@example.com" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="************" required>
                </div>
                <div class="mb-3 form-check d-flex justify-content-between">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remember">
                        Remember me!
                    </label>
                    <a href="{{ route('password.request') }}" class="btn btn-link">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </form>
        </div>
    </div>

@endsection
