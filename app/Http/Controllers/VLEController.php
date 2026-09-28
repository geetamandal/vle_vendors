<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VLEController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function serviceList()
    {
        return view('reports.service_list');
    }
    public function productEntry()
    {
        return view('vle.add_product');
    }
 

    public function enquiryList()
    {
          return view('reports.enquiry_list');
    }

    public function addCustomer()
    {
         return view('vle.add_customer');
    }

    public function advertisementEntry()
    {
          return view('vle.advertisement_entry');
    }

    public function offerEntry()
    {
          return view('vle.offer_entry');
    }
}
