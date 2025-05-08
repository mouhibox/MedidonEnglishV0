@extends('layouts/app')

@section('content')
    @include('__inc/header')
    <div class="d-flex justify-content-center py-5 mb-4">
        <div class="col-md-4">
            <h1 class="text-purple">Mon compte</h1>
            <hr>
            <div>
                <h5><strong>Type de compte :</strong>
                    {{ auth()->user()->type == 1 ? 'Organisation' : 'Particulier' }}
                </h5>
                <h5><strong>Nom :</strong> {{ auth()->user()->name }}</h5>
                <h5><strong>Email :</strong> {{ auth()->user()->email }}</h5>
                <h5><strong>Date d'inscription :</strong> {{ auth()->user()->created_at->format('d/m/Y') }}</h5>
                <a href="{{ route('account.edit') }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i>
                    Mettre à jour</a>
            </div>
        </div>
    </div>
@endsection
