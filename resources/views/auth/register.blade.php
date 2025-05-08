@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Sign Up</h1>
            <hr>
            @include('__inc/alert')
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="type" id="type1" autocomplete="off" value="0"
                               checked>
                        <label class="btn btn-outline-primary" for="type1">Individual</label>

                        <input type="radio" class="btn-check" name="type" id="type2" autocomplete="off" value="1">
                        <label class="btn btn-outline-primary" for="type2">Organization</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </div>
@endsection
