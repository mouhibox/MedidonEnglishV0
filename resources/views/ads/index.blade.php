@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-purple">👐 My Donations</h1>
                <a href="{{ route('ads.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> 📝 Publish Donation
                </a>
            </div>
            <hr>
            <div class="row">
                @if($ads->count())
                @foreach($ads as $ad)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="badge bg-success position-absolute" style="top: 10px; right: 10px;">
                            🟢 {{ $ad->status }}
                        </div>

                        <!-- Image Section -->
                        <div class="card-img-wrapper">
                            @if($ad->image)
                            <img src="{{ asset('storage/' . $ad->image) }}" class="card-img-top" alt="{{ $ad->title }}">
                            @else
                            <img src="{{ asset('assets/img/placeholder.webp') }}" class="card-img-top" alt="No image available">
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $ad->title }}</h5>
                            <p class="card-text">{{ $ad->description }}</p>

                            <!-- Category Badge -->
                            <div class="row mb-2">
                                <div class="col-6">
                                    <span class="badge bg-primary">🗂️ {{ $ad->category->name }}</span>
                                </div>
                            </div>

                            <!-- Location & Availability Info -->
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-1"><i class="bi bi-geo-alt"></i> 🌍 {{ $ad->location }}</p>
                                    <p class="mb-1"><i class="bi bi-calendar"></i> 📅 {{ $ad->availability }}</p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-grid gap-2 mt-3">
                                <a href="#" class="btn btn-primary">🔍 View Details</a>
                                <a href="#" class="btn btn-outline-dark">💬 Contact Donor</a>
                            </div>
                        </div>

                        <!-- Footer Section -->
                        <div class="card-footer text-muted bg-transparent">
                            <small>📅 Posted {{ $ad->created_at->diffForHumans() }} by {{ $ad->user->name }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-secondary">
                    <i class="bi bi-info-circle"></i> 🚫 No donations available.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection