@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center py-5 mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="text-purple">Publish a donation</h1>
                </div>
                <hr>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image (optional)</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" name="status" class="form-control" placeholder="e.g. Good condition"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Availability</label>
                        <input type="text" name="availability" class="form-control"
                               placeholder="e.g. Available until 12/12/2024" required>
                    </div>

                    <button type="submit" class="btn btn-success">Submit Ad</button>
                </form>
            </div>
        </div>
    </div>
@endsection
