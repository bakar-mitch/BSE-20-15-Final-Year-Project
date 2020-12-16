<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Project;


class PaymentController extends Controller
{
    //
    public function create(){

        return view('payments.create');
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){


        $request->validate([
            'client_name'         => 'required',
            'email'       => 'required',
            'amount'   => 'required',
            'project_id'  => 'required',
        ]);

        $save = new Payment;
 
        $save->client_name = $request->client_name;
        $save->email = $request->email;
        $save->amount = $request->amount;
        $save->project_id = $request->project_id;
 
        $save->save();
        
        $payment = Payment::create($request->all());

        
        return redirect()->back()->withStatus('Your payment has been submitted, <a href="'.route('payments.show', [$payment->id,$request->project_id]).'">here</a>');
    }

    public function show($payment_id, $project_id)

    {
       
        $payment= Payment::where('id',$payment_id)->first();
        $project= Project::where('project_id',$project_id)->first(); 
        return view('payments.show', compact('payment','project'));
    }


}
