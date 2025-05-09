@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-purple">Publish a Donation 📢</h1>
            </div>
            <hr>

            @if(session('success'))
            <div class="alert alert-success">
                ✅ {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title Field -->
                <div class="mb-3">
                    <label class="form-label">Title 🏷️</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <!-- Category Field -->
                <div class="mb-3">
                    <label class="form-label">Category 📂</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Brand Name Field -->
                <div class="mb-3">
                    <label class="form-label">Brand Name 🏷️</label>
                    <input type="text" name="brand_name" class="form-control" placeholder="Enter the brand name" value="{{ old('brand_name') }}">
                </div>

                <!-- Description Field -->
                <div class="mb-3">
                    <label class="form-label">Description 📝</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Status Field -->
                <div class="mb-3">
                    <label class="form-label">Status 🏅</label>
                    <input type="text" name="status" class="form-control" placeholder="e.g. Good condition" required>
                </div>

                <!-- Location Field -->
                <div class="mb-3">
                    <label class="form-label">Location 📍</label>
                    <input type="text" name="location" class="form-control" required>
                </div>

                <!-- Availability Field -->
                <div class="mb-3">
                    <label class="form-label">Availability 📅</label>
                    <input type="text" name="availability" class="form-control" placeholder="e.g. Available until 12/12/2024" required>
                </div>

                <!-- Phone Number Field -->
                <div class="mb-3">
                    <label class="form-label">Phone Number 📞</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                </div>

                <!-- Image Field -->
                <div class="mb-3">
                    <label class="form-label">Image (optional) 📸</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">Submit Aid 🚀</button>
            </form>
        </div>
    </div>
</div>
@endsection