<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\Project;

class DonationController extends Controller
{
    public function display(){

        return view('donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        //dd($request->all());

        $request->validate([
            'donor_name'         => 'required',
            'email'       => 'required',
            'amount'   => 'required',
            'telephone'   => 'required',
            'project_id'  => 'required',
        ]);

        $save = new Donation;
 
        $save->donor_name = $request->donor_name;
        $save->email = $request->email;
        $save->amount = $request->amount;
        $save->telephone = $request->telephone;
        $save->project_id = $request->project_id;
 
        $save->save();
        
        $donation = Donation::create($request->all());

        
        return redirect()->back()->withStatus('Your Donation has been submitted, <a href="'.route('donations.show',[$donation->id,$request->project_id]).'">here</a>');
    }

    public function show($donation_id, $project_id)
    {
        
        $donation= Donation::where('id',$donation_id)->first();
        $project= Project::where('project_id',$project_id)->first(); 
        return view('donations.show', compact('donation','project'));
    }
}
