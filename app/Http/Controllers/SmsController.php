<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsController extends Controller
{

    public function sendSMS($mobileno, $otp)
    {
        $username = "naveenmandal";  // Your API username
        $password = "naveen1702"; // Your API password
        $message = "$otp is your OTP for Login in App . Do Not Share it with Anyone. THINKERS PARADIZE";
        $senderid = "THNPRZ";  // Your approved sender ID
        $route = "4"; // Your API route
        $template_id = "DLT_APPROVED_TEMPLATE_ID"; // Approved DLT template ID
        $authkey="1b9712ca5c4d33055f562fd0887412e8";

        $response = Http::get('http://shubhsms.com/apiv2', [
            // 'userid' => $username,
            // 'password' => $password,
            'authkey'=>$authkey,
            'senderid' => $senderid,
            'numbers' => $mobileno,
            'message' => $message,
            'route' => $route,
            // 'template_id' => $template_id,
            // 'unicode' => 0  // 1 for Unicode, 0 for normal SMS
        ]);

        return $response->json(); // Return API response as JSON
    }

    public function sendStatusSMS($mobileno, $msg)
    {
        // dd($mobileno,$msg);
        $username = "naveenmandal";  // Your API username
        $password = "naveen1702"; // Your API password
        $message = "$msg THINKERS PARADIZE";
        $senderid = "THNPRZ";  // Your approved sender ID
        $route = "4"; // Your API route
        $template_id = "DLT_APPROVED_TEMPLATE_ID"; // Approved DLT template ID
        $authkey="1b9712ca5c4d33055f562fd0887412e8";

        $response = Http::get('http://shubhsms.com/apiv2', [
            // 'userid' => $username,
            // 'password' => $password,
            'authkey'=>$authkey,
            'senderid' => $senderid,
            'numbers' => $mobileno,
            'message' => $message,
            'route' => $route,
            // 'template_id' => $template_id,
            // 'unicode' => 0  // 1 for Unicode, 0 for normal SMS
        ]);
        return $response->json(); // Return API response as JSON
    }

     public function ofdMsg($mobileno, $msg)
    {
        // dd($mobileno,$msg);
        $username = "naveenmandal";  // Your API username
        $password = "naveen1702"; // Your API password
        $message = "$msg THINKERS PARADIZE";
        $senderid = "THNPRZ";  // Your approved sender ID
        $route = "4"; // Your API route
        $template_id = "DLT_APPROVED_TEMPLATE_ID"; // Approved DLT template ID
        $authkey="1b9712ca5c4d33055f562fd0887412e8";

        $response = Http::get('http://shubhsms.com/apiv2', [
            // 'userid' => $username,
            // 'password' => $password,
            'authkey'=>$authkey,
            'senderid' => $senderid,
            'numbers' => $mobileno,
            'message' => $message,
            'route' => $route,
            // 'template_id' => $template_id,
            // 'unicode' => 0  // 1 for Unicode, 0 for normal SMS
        ]);
        dd($response);
        return $response->json(); // Return API response as JSON
    }


}
