@extends('layouts.app')

@section('content')
@include('__inc/header')
<div class="d-flex justify-content-center py-5 mb-4">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="text-center text-purple mb-4">Update My Account</h1>
                <hr>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('account.update') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="type" class="form-label"><i class="bi bi-person-badge"></i> Account Type</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="0" {{ $user->type == 0 ? 'selected' : '' }}>Individual</option>
                            <option value="1" {{ $user->type == 1 ? 'selected' : '' }}>Organization</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="bi bi-person"></i> Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope"></i> Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100"><i class="bi bi-save"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection