@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4 w-100" style="max-width: 500px;">
        <h3 class="text-center mb-4">💳 Donate with Stripe</h3>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('donations.process') }}" method="POST" id="payment-form">
            @csrf
            <div class="mb-3">
                <label for="amount" class="form-label">Donation Amount ($)</label>
                <input type="number" name="amount" class="form-control" min="1" required>
            </div>

            <div class="mb-3">
                <label for="card-element" class="form-label">Card Details</label>
                <div id="card-element" class="form-control"></div>
                <div id="card-errors" class="form-text text-danger mt-1"></div>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Donate</button>
            </div>
        </form>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Pass the Stripe Key from PHP to JavaScript
    const stripeKey = "{{ env('STRIPE_KEY') }}";
    const stripe = Stripe(stripeKey); // Use the stripe key variable
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const {
            token,
            error
        } = await stripe.createToken(card);
        if (error) {
            document.getElementById('card-errors').textContent = error.message;
        } else {
            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'stripeToken';
            hidden.value = token.id;
            form.appendChild(hidden);
            form.submit();
        }
    });
</script>
@endsection