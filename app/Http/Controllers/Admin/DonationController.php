<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donation;


class DonationController extends Controller
{
    //
     //
     public function donation(){
        return view('admin.donations.index');

    }

    public function create(){
        return view('admin.donations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'donor_name'         => 'required',
            'project'       => 'required',
            'amount'   => 'required',
            'email'  => 'required|email',
        ]);

       
        $donation = Donation::create($request->all());


        return redirect()->back()->withStatus('Your donation has been submitted, <a href="'.route('admin.donations.show', $donation->id).'">here</a>');

}
public function show(Donation $donation)
{
    // //$ticket->id = mt_rand( 1000000000, 9999999999 );
    // $pay->load('comments');
    

    return view('admin.donations.show', compact('donation'));
}
}
