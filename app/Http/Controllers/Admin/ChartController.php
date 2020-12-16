<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Ticket;
use App\User;

class ChartController extends Controller
{
    public function index(){

        return view('charts.chart');
    }

    public function testdata()
    {
        $data = User::select('id', 'name')->get();
        return response()->json($data);
    }

    public function ticket_against_id()
    {
        $datas = Ticket::select('category_id','title')->get();
        return response()->json($datas);
    }

    public function status_id_against_title()
    {
        $data = Ticket::select('status_id', 'title')->get();
        return response()->json($data);
    }

    public function tickets_created_date()
    {
        $data = Ticket::select('title', 'priority_id')->get();
        return response()->json($data);
    }

    public function id_against_category_id()
    {
        $data = Ticket::select('id', 'title')->get();
        return response()->json($data);
    }


}
