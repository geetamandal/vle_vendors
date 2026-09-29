<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vendor1Controller extends Controller
{
     public function index_1()
     {
          return view('shopkeeper.vendor_1.index');
     }

     public function services()
     {
          return view('shopkeeper.vendor_1.service');
     }

     public function contact_us()
     {
         return view('shopkeeper.vendor_1.contact');
     }
     public function product(){
        return view('shopkeeper.vendor_1.product');
    }
    public function productDetails()
    {
         return view('shopkeeper.vendor_1.product_details');
    }
     public function cart(){
        return view('shopkeeper.vendor_1.cart');
    }
    public function checkout(){
        return view('shopkeeper.vendor_1.checkout');
    }
     public function placeorder(){
        return view('shopkeeper.vendor_1.placeorder');
    }
}
