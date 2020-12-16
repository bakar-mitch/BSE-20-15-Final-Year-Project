<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        // dd(session()->get('total'));
        return view('frontend.pages.stripe')->with(['total'=>session()->get('total')]);
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {

        // dd($request->all());
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->input('total'),
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }

    public function handleDonation(Request $request)
    {

        // dd($request->all());
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->input('total'),
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "Making test donation." 
        ]);
  
        Session::flash('success', 'Your Donation has been successfully processed.');
          
        return back();
    }
}