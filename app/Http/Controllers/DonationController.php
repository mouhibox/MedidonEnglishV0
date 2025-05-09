<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{
    public function createPaymentForm()
    {
        return view('donations.payment');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'stripeToken' => 'required',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            Charge::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Donation Payment',
            ]);

            return back()->with('success', 'Thank you for your donation!');
        } catch (\Exception $e) {
            return back()->with('error', 'Payment error: ' . $e->getMessage());
        }
    }
}
