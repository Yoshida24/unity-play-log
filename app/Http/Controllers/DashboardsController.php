<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Illuminate\Support\Facades\DB;

class DashboardsController extends Controller
{
    public  function index(Request $request)
    {
        $logs = DB::table('logs')->simplePaginate(2);
        return view('dashboards.dashboards_index',['logs'=>$logs]);
        //return $logs->toArray();
    }
}
