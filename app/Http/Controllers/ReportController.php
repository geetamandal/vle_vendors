<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function productList()
    {        
        return view('reports.product_list');
    }
    public function productDetails($id)
    {
        $id = decrypt($id);
        return view('reports.product_details');
    }
    public function orderList()
    {
        // dd(session('role_id'));
        return view('reports.order_list');
    }
     
    public function advertisementList()
    {
          return view('reports.advertisement_list');
    }

     public function offerList()
    {
          return view('reports.offer_list');
    }
    
}
