<?php

namespace App\Http\Controllers;

use AWS\CRT\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.landing');
    }

    public function contactUs(Request $request)
    {        
            return view('public.contact');             
    }
    public function aboutUs()
    {
        $heading = "About Us";
        $title = 'Casa Interiors | About Us';
        return view('public.about', compact('title', 'heading'));
    }

    public function product()
    {
        return view('public.product');
    }

    public function productDetails()
    {
        return view('public.product_details');
    }

    public function addToCart()
    {
        return view('public.add_to_cart');
    }

    public function checkOut()
     { 
          return view('public.checkout');
     }
    public function service()
    {
        return view('public.services');
    }
    public function serviceDetails()
    {
        return view('public.service_details');
    }


    


}
