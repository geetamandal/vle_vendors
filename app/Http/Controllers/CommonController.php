<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_otp_verification;

class CommonController extends Controller
{
    public function vleList()
    {
        return view('reports.vle_list');
    }

    public function vleDetails(Request $request)
    {
        $id = decrypt($request->id);

        return view('reports.vle_details', compact('id'));
    }

    public function customerList()
    {
          return view('reports.customer_list');
    }
}
