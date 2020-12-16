<?php

namespace App\Http\Controllers\Admini;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(){

        return view('admin.charts.index');
    }
}
