<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Exception\CardException;

class DonateController extends Controller
{
    public function create()
    {
        return view('donations.payment');
    }

    public function process(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $request->amount * 100, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Donation',
            ]);

            return redirect()->route('donate.create')->with('success', 'Donation successful! Thank you!');
        } catch (CardException $e) {
            return redirect()->route('donate.create')->with('error', 'Donation failed: ' . $e->getMessage());
        }
    }
}
