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
        $title="DIgital Bastar | Home";
        return view('public.landing',compact('title'));
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

    public function service()
    {
        return view('public.services');
    }    
    
    public function registrations()
    {
         $heading = "पंजीकरण";
        $title = 'Digital Bastar | Registration';
         return view('public.registration',compact('title', 'heading'));
    }

    public function shop()
    {
         return view('public.shop');
    }


}
