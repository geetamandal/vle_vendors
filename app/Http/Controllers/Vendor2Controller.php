<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vendor2Controller extends Controller
{
    public function index(){
        return view('shopkeeper.vendor_2.index');
    }

    public function product(){
        return view('shopkeeper.vendor_2.product');
    }
    public function service(){
        return view('shopkeeper.vendor_2.services');
    }
    public function contact(){
        return view('shopkeeper.vendor_2.contact');
    }
    public function userLogin(){
        return view('shopkeeper.vendor_2.login');
    }
    public function cart(){
        return view('shopkeeper.vendor_2.cart');
    }
    public function checkout(){
        return view('shopkeeper.vendor_2.checkout');
    }
     public function placeorder(){
        return view('shopkeeper.vendor_2.placeorder');
    }
     public function serviceDetails(){
        return view('shopkeeper.vendor_2.service_details');
    }


    
    
}
