@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Forgot Password</h1>
            <hr>
            @include('__inc/alert')
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send Reset Link</button>
            </form>
        </div>
    </div>
@endsection
