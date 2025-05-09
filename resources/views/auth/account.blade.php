@extends('layouts.app')

@section('content')
@include('__inc/header')
<div class="d-flex justify-content-center py-5 mb-4">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="text-center text-purple mb-4">My Account</h1>
                <hr>
                <div>
                    <h5><strong>Account Type:</strong>
                        <i class="bi {{ auth()->user()->type == 1 ? 'bi-building' : 'bi-person' }}"></i>
                        {{ auth()->user()->type == 1 ? 'Organization' : 'Individual' }}
                    </h5>
                    <h5><strong>Name:</strong> <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}</h5>
                    <h5><strong>Email:</strong> <i class="bi bi-envelope"></i> {{ auth()->user()->email }}</h5>
                    <h5><strong>Registration Date:</strong> <i class="bi bi-calendar-date"></i> {{ auth()->user()->created_at->format('d/m/Y') }}</h5>
                    <a href="{{ route('account.edit') }}" class="btn btn-primary w-100 mt-3">
                        <i class="bi bi-pencil-square"></i> Update
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection