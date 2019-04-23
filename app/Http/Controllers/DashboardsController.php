<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class DashboardsController extends Controller
{
    public  function index(Request $request)
    {
        $sort = $request->sort;
        $logs = Log::orderBy($sort,'asc')->paginate(10);
        $param = ['logs'=>$logs,'sort'=>$sort];
        return view('dashboards.dashboards_index',$param);
    }
}
