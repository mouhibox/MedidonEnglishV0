@extends('layouts.app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Mettre à jour mon compte</h1>
            <hr>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('account.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Type de compte</label>
                    <select name="type" class="form-control" required>
                        <option value="0" {{ $user->type == 0 ? 'selected' : '' }}>Particulier</option>
                        <option value="1" {{ $user->type == 1 ? 'selected' : '' }}>Organisation</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Nom</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection
