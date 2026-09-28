<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function generate_captcha()
    {
        $image = imagecreatetruecolor(200, 50);
        $bgColor = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image, 0, 0, 200, 50, $bgColor);
        $textColor = imagecolorallocate($image, 0, 0, 0);
        $captchaText = substr(str_shuffle('1234567890'), 0, 6);
        session(['captcha' => $captchaText]);
        $fontPath = public_path('arial.ttf');
        if (!file_exists($fontPath)) {
            return response()->json(['error' => 'Font file not found!'], 500);
        }
        imagettftext($image, 20, 0, 30, 30, $textColor, $fontPath, $captchaText);
        ob_start();
        imagepng($image);
        $imageData = ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        return response($imageData)
        ->header('Content-Type', 'image/png')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
    }


}
