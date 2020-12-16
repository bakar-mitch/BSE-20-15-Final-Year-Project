<?php

namespace App\Http\Controllers\Admin;

use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PaymentsController extends Controller
{
    public function index(Request $request){

         //dd($request->all());
        // $payments = Payment::select('select * from payments');
        // return view('admin.payments.index',['payments'=>$payments]);

        if ($request->ajax()) {
            $query = Payment::with(['project_id'])
                ->filterPayments($request)
                ->select(sprintf('%s.*', (new Payment)->table));
            $table = Datatables::of($query);

            // $table->addColumn('placeholder', '&nbsp;');
            // $table->addColumn('actions', '&nbsp;');

            // $table->editColumn('actions', function ($row) {
            //     $viewGate      = 'ticket_show';
            //     $editGate      = 'ticket_edit';
            //     $deleteGate    = 'ticket_delete';
            //     $crudRoutePart = 'tickets';

            //     return view('partials.datatablesActions', compact(
            //         'viewGate',
            //         'editGate',
            //         'deleteGate',
            //         'crudRoutePart',
            //         'row'
            //     ));
            // });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('client_name', function ($row) {
                return $row->client_name ? $row->client_name : "";
            });
            $table->addColumn('project', function ($row) {
                return $row->project ? $row->project : '';
            });
            $table->addColumn('amount', function ($row) {
                return $row->amount ? $row->amount : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            
            $table->addColumn('view_link', function ($row) {
                return route('admin.tickets.show', $row->id);
            });

            $table->rawColumns(['project_id']);

            return $table->make(true);
        }

        return view('admin.payments.index');

        }
}
