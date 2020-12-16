<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PaymentController extends Controller
{
    //
    public function payment(){

        // abort_if(Gate::denies('payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $payments = Payment::all();

        return view('admin.payments.index');

    }

    public function create(){
        return view('admin.payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name'         => 'required',
            'project'       => 'required',
            'amount'   => 'required',
            'email'  => 'required|email',
        ]);

       
        $payment = Payment::create($request->all());


        return redirect()->back()->withStatus('Your payment has been submitted, <a href="'.route('payments.show', $payment->id).'">here</a>');

}
public function show(Payment $payment)
{
    // //$ticket->id = mt_rand( 1000000000, 9999999999 );
    // $pay->load('comments');
    

    return view('payments.show', compact('payment'));
}


}