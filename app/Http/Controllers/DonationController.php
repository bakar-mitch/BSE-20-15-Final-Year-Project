<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

class DonationController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.pages.donation')->with(['project_name' => $request->input('project_name')]);

    }

    public function indexbackend(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'phone'=>'numeric|required',
            'amount_donated'=>'numeric|required',
            'email'=>'string|required'
        ]);

        $donation=new Donation();

        $donation_data=$request->all();

        $donation->donor_firstname = $donation_data['first_name'];
        $donation->donor_lastname = $donation_data['last_name'];
        $donation->project_name= $donation_data['project_name'];
        $donation->donor_email= $donation_data['email'];
        $donation->donor_phonenumber= $donation_data['phone'];
        $donation->amount_donated= $donation_data['amount_donated'];

        $donation->save();

        if(request('payment_method')=='paypal'){
            return redirect()->route('paypal')->with(['total'=>$donation_data['amount_donated']]);
        }
        elseif (request('payment_method')=='momo') {
            return redirect()->route('mtnmomo')->with(['amount'=>$donation_data['amount_donated'], 'phone'=>$donation_data['phone']]);
        }
        elseif (request('payment_method')=='cod') {
            return redirect()->route('stripe.payment.view')->with(['total'=>$donation_data['amount_donated']]);
        }
        else{
            return redirect()->route('donation.index');
        }

        return view('backend.donation.index');
    }

    public function donation_index(){

        $donations = Donation::all();
        return view('backend.donation.index', compact('donations'));
    }
}
