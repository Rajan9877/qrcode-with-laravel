<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function generateQRCode()
    {
        $url = 'http://blogsofrajan.infinityfreeapp.com/'; // Replace with the URL or content you want to encode.
        // $text = "Hello, I am Rajan Joriya.";
    
        $qrcode = QrCode::size(200)->generate($url);
    
        // dd($qrcode);

        return view('qrcode', compact('qrcode'));
    }
}
